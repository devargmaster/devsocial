@extends('layouts.app')

@section('titulo' )
    Registro de usuario
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-4/12 ml-5  ">
           <p>imagen</p>
        </div>
        <div class="md:w-4/12 m-5 bg-white p-6 rounded-lg shadow-2xl">
            <form>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre:</label>
                    <input type="text"
                           id="name"
                           name="name"
                            placeholder="Ingresa tu nombre"
                           class="border p-3 w-full rounded-lg"/>
                </div>
                <div class="mb-5">
                    <label id= "username" for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username:</label>
                    <input type="text"
                           id="username"
                           name="username"
                           placeholder="Ingresa tu username"
                           class="border p-3 w-full rounded-lg"/>
                </div>
                <div class="mb-5">
                    <label id= "email" for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email:</label>
                    <input type="text"
                           id="email"
                           name="email"
                           placeholder="Ingresa tu email"
                           class="border p-3 w-full rounded-lg"/>
                </div>
                <div class="mb-5">
                    <label id= "password" for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password:</label>
                    <input type="password"
                           id="password"
                           name="password"
                           placeholder="Ingresa tu password"
                           class="border p-3 w-full rounded-lg"/>
                </div>
                <div class="mb-5">
                    <label id= "password_confirmation" for="password" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Password:</label>
                    <input type="password"
                           id="password_confirmation"
                           name="password_confirmation"
                           placeholder="Repite tu password"
                           class="border p-3 w-full rounded-lg"/>
                </div>
                <input type="submit"
                          value="Crear cuenta"
                          class="bg-sky-600 hover:bg-sky-700 transition-colors
                          cursor-pointer
                          w-full p-3 text-white uppercase font-bold rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection