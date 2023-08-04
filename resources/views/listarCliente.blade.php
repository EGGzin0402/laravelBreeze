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

                        <fieldset> <b id="FormTitle"> Consultar Contatos Agendados </b> </fieldset>
                        <br>

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
                                <td><button class="button"></button></td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
