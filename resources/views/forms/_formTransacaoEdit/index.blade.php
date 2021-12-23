<div class="col-md-3">
    <div class="form-group ">
        <label for="tipo">{{ __('Tipo') }}</label>
        <select name="tipo" id="tipo" required class="form-control" >

            @isset($transacao->tipo)
             <option selected value="{{$transacao->tipo}}">
                @switch($transacao->tipo)
                @case(1)
                    Débito
                    @break
                @case(2)
                    Boleto
                    @break
                 @case(3)
                    Financiamento
                    @break

                 @case(4)
                    Crédito
                    @break
                @case(5)
                    Recebimento empréstimo
                    @break
                @case(6)
                    Vendas
                    @break
                @case(7)
                Recebimento TED
                    @break
                 @case(8)
                 Recebimento DOC
                    @break
                @case(9)
                Aluguel
                    @break
                    
                @default
                    
            @endswitch
            </option>

             @else
                <option value="" disabled selected>Selecione o tipo da transação</option>
            @endisset
            <option  value="1">Débito+</option>
            <option  value="2">Boleto-</option>
            <option  value="3">Financiamento-</option>
            <option  value="4">Crédito+</option>
            <option  value="5">Recebimento Empréstimo+</option>
            <option  value="6">	Vendas+</option>
            <option  value="7">Recebimento TED+</option>
            <option  value="8">Recebimento TED+</option>
            <option  value="9">Recebimento TED-</option>
            
        </select>

       
    </div>
</div>
<div class="col-md-3">
    <div class="form-group ">
        <label for="data">{{ __('Data da transação') }}</label>
        <input  id="data" value="{{ isset($transacao->data) ? $transacao->data : '' }}"
            type="date" class="form-control @error('data') is-invalid @enderror border-secondary" name="data"
            placeholder="data" value="{{ old('data') }}" required autocomplete="data" autofocus>

       
    </div>
</div>

<div class="col-md-3">
    <div class="form-group ">
        <label for="valor">{{ __('Valor') }}</label>
        <input  id="valor" value="{{ isset($transacao->valor) ? $transacao->valor : '' }}"
            type="number" min="0" class="form-control @error('valor') is-invalid @enderror border-secondary" name="valor"
            placeholder="nome da loja" value="{{ old('valor') }}" required autocomplete="valor" autofocus>

       
    </div>
</div>

<div class="col-md-3">
    <div class="form-group ">
        <label for="id_loja">{{ __('Loja') }}</label>

            <select name="id_loja" id="id_loja" required class="form-control" >

                @isset($lojaSelecionada)
                 <option selected value="{{$lojaSelecionada->id}}">{{$lojaSelecionada->nome_loja}}</option>

                 @else
                    <option value="" disabled selected>Selecione a Loja</option>
                @endisset
               
                @foreach ($lojas as $loja)

                    <option value="{{$loja->id}}">{{$loja->nome_loja}}</option>
                    
                @endforeach

            </select>

       
    </div>
</div>

<div class="col-md-3">
    <div class="form-group ">
        <label for="cartao">{{ __('Cartão') }}</label>
        <input  id="cartao"  value="{{ isset($transacao->cartao) ? $transacao->cartao : '' }}"
            type="number" min="0" class="form-control @error('cartao') is-invalid @enderror border-secondary" name="cartao"
            placeholder="" value="{{ old('cartao') }}" required autocomplete="cartao" autofocus>

       
    </div>
</div>
<div class="col-md-3">
    <div class="form-group ">
        <label for="hora">{{ __('Hora') }}</label>
        <input  id="hora"  value="{{ isset($transacao->hora) ? $transacao->hora : '' }}"
            type="time"  class="form-control @error('hora') is-invalid @enderror border-secondary" name="hora"
            placeholder="" value="{{ old('hora') }}" required autocomplete="hora" autofocus>

       
    </div>
</div>



