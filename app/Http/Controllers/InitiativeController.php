<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\InitiativeCreateRequest;
use App\Http\Requests\InitiativeUpdateRequest;
use App\Http\Resources\InitiativeResource;
use App\Initiative;
use App\RateItem;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * @group Initiative
 *
 * Class InitiativeController
 * @package App\Http\Controllers
 */
class InitiativeController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Initiative::class);
    }

    /**
     * Display a listing of the Initiatives.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return InitiativeResource::collection(Initiative::paginate());
    }

    /**
     * Store a newly created Initiative in storage.
     * @authenticated
     *
     * @param InitiativeCreateRequest $request
     * @return InitiativeResource
     */
    public function store(InitiativeCreateRequest $request)
    {
        $user = $request->user('api');

        $event = Initiative::create($request->except(['photos']));

        $event->user()->associate($user);

        $event->detachMedia();

        $event->attachMedia($request->photos);

        return InitiativeResource::make($event);
    }

    /**
     * Display the specified Initiative.
     *
     * @param Initiative $initiative
     * @return InitiativeResource
     */
    public function show(Initiative $initiative)
    {
        return InitiativeResource::make($initiative);
    }

    /**
     * Update the specified resource in storage.
     * @authenticated
     *
     * @param InitiativeUpdateRequest $request
     * @param Initiative $initiative
     * @return InitiativeResource
     */
    public function update(InitiativeUpdateRequest $request, Initiative $initiative)
    {
        $initiative->fill($request->except(['photos']));

        $initiative->detachMedia();

        $initiative->attachMedia($request->photos);

        $initiative->save();

        return InitiativeResource::make($initiative);
    }

    /**
     * Rate up initiative
     * @authenticated
     *
     * @param Request $request
     * @param Initiative $initiative
     * @return bool
     * @throws AuthorizationException
     */
    public function rate(Request $request, Initiative $initiative)
    {
        $this->authorize('karmaOrRate', [Initiative::class, $initiative]);

        $user = $request->user('api');

        /** @var RateItem $karmaItem */
        $karmaItem = $initiative->rate_items()->firstOrNew(
            ['user_id' => $user->id]
        );

        $karmaItem->save();

        return true;
    }

    /**
     * Unrate initiative
     * @authenticated
     *
     * @param Request $request
     * @param Initiative $initiative
     * @return bool
     * @throws Exception
     */
    public function unrate(Request $request, Initiative $initiative)
    {
        $this->authorize('karmaOrRate', [Initiative::class, $initiative]);

        $user = $request->user('api');

        /** @var RateItem $rateItem */
        $rateItem = $initiative->rate_items()->where('user_id', $user->id)->firstOrFail();

        $rateItem->delete();

        return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
