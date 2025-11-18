<?php

namespace App\Http\Controllers;

use App\Jobs\SendToBotJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApplicationController extends Controller
{

    /**
     * @OA\Post(
     *     path="/api/show/dsd{id}",
     *     summary="Show course by ID",
     *     description="Возвращает информацию о конкретном курсе по ID",
     *     operationId="dsd",
     *     tags={"Aplication"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID курса",
     *         required=true,
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\RequestBody(
     *         required=false,
     *         description="Тело запроса не требуется для этого эндпоинта",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="exampleField", type="string", example="test")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Course retrieved successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="id", type="integer", example=1),
     *             @OA\Property(property="title", type="string", example="Introduction to Digital Marketing"),
     *             @OA\Property(property="info", type="string", example="Краткое описание курса"),
     *             @OA\Property(property="price", type="number", example=148)
     *         )
     *     ),
     *     security={{"bearerAuth": {}}}
     * )
     */

    public function add(Request $request)
    {
        $message = "
Имя: {$request->name}
Номер: {$request->phone}
Курс: {$request->course}
";

        dispatch(new SendToBotJob($message));
        return redirect()->route('home');
    }
}
