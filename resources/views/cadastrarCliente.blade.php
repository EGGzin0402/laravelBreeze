<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                <form>
                    <div class="mb-3">
                        <label for="nomeInput" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nomeInput">
                    </div>

                    <div class="mb-3">
                        <label for="enderecoInput" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="enderecoInput">
                    </div>

                    <div class="mb-3">
                        <label for="bairroInput" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="bairroInput">
                    </div>

                    <div class="mb-3">
                        <label for="CEPInput" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="CEPInput" maxlength=9>
                    </div>

                    <div class="mb-3">
                        <label for="estadoInput" class="form-label">Estado</label>
                        <select class="form-select" id="estadoInput">
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="cidadeInput" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidadeInput">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
