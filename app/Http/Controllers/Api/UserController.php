<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Retorna uma lista paginada de usuários
     * 
     * Este método recupera uma lista paginada de usuários do banco de dados
     * e a retorna como uma resposta JSON.
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() : JsonResponse 
    {
        //Recupera os usuários do banco de dados, ordenados pelo id em ordem decrescente, paginados
        $users = User::orderBy('id', 'DESC')->paginate(2);

        // Retorna os usuários como uma resposta JSON.
        return response()->json([
            'status' => true,
            'users' => $users,
        ], 200);
    }

    /**
     * Exibe os detalhes de um usuário específico.
     * 
     * Este método retorna os detalhes de um usuário específico em formato JSON.
     * 
     * @param \App\Models\User $user o objeto do usuário a ser exibido
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(User $user) : JsonResponse
    {
        // Retorna os detalhes do usuário em formato JSON
        return response()->json([
            'status' => true,
            'user' => $user,
        ], 200);
    }
}
