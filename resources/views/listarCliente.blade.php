<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                        <br>

                        @if (!empty($clientes[0]))

                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Bairro</th>
                                <th scope="col">CEP</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach($clientes as $cliente)
                                <tr>
                                    <th scope="row">{{$cliente->id}}</th>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->endereco}}</td>
                                    <td>{{$cliente->bairro}}</td>
                                    <td>{{$cliente->cep}}</td>
                                    <td>{{$cliente->estado}}</td>
                                    <td>{{$cliente->cidade}}</td>
                                    <td><a class="btn btn-primary" href="{{route('Cliente.edit', ['Cliente' => $cliente])}}" role="button">Editar</a></td>
                                    <td>@include('deletarCliente')</td>
                                </tr>
                            @endforeach
                            </tbody>
                            </table>
                        @else
                        <tr>
                            <td class="px-4 py-2 border text-center text-red-500" colspan="7">Nenhum cliente cadastrado.</td>
                        </tr>
                        @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
