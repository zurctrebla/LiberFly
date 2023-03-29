<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FlyResource;
use App\Models\Fly;
use Illuminate\Http\Request;

class FlyController extends Controller
{
    protected $entity;

    public function __construct(Fly $fly)
    {
        $this->entity = $fly;
    }

    /**
     * @OA\Get(
     *      path="/flies",
     *      operationId="geFliesList",
     *      tags={"Flies"},
     *      summary="Get list of flies",
     *      description="Returns list of flies",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation"
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    public function index()
    {
        $flies = $this->entity->get();

        return FlyResource::collection($flies);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @OA\Get(
     *      path="/flies/{uuid}",
     *      operationId="getFlyByUuid",
     *      tags={"Flies"},
     *      summary="Get Fly information",
     *      description="Returns Fly data",
     *      @OA\Parameter(
     *          name="uuid",
     *          description="Fly uuid",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(
     *              @OA\Property(property="identify", type="string"),
     *              @OA\Property(property="company", type="string"),
     *              @OA\Property(property="destination", type="string")
     *          )
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     */
    public function show(string $identify)
    {
        $fly = $this->entity->where('uuid', $identify)->firstOrFail();

        return new FlyResource($fly);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $identify)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
