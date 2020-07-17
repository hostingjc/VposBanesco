<div class="payment">
    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group" id="amount">
                    <label >Monto</label>                              
                    <input type="number" class="form-control" name="amount" step="0.01" min="200" max="1000000" required="required">
        </div>
        
        <div class="form-group" id="id_card">
            <label >Motivo de la Compra</label>                              
            <input type="text" class="form-control" name="description"  maxlength="30"  required="required">
        </div>

        <div class="form-group" id="id_card">
                <label >N° Cedula</label>                              
                <input type="number" class="form-control" name="cedula"  maxlength="8" min="1000000" max="99999999" required="required">
        </div>

        
        
        <div class="form-group owner">
            <label for="owner">Nombre | Tarjetabiente</label>
            <input type="text" class="form-control" id="owner" name="cardName" style="text-transform:uppercase" required="required">
        </div>
        <div class="form-group CVV">
            <label for="cvv">CVV</label>
            <input type="text" class="form-control" id="cvv" name="cvv" required="required">
        </div>
       
        <div class="form-group" id="card-number-field">
            <label for="cardNumber">Número de la Tarjeta</label>
            <input type="text" class="form-control" id="cardNumber" name="cardNumber" required="required">
        </div>
        <div class="form-group" id="expiration-date">
            <label>Fecha de Expiración</label>
            <select required="required" name="mes">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            <select required="required" name="anual">
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
            </select>
        </div>
        <div class="form-group" id="credit_cards">
            <img src="{{ asset('payment/images/visa.png') }}" id="visa">
            <img src="{{ asset('payment/images/mastercard.png') }}" id="mastercard">
            <img src="{{ asset('payment/images/amex.png') }}" id="amex">
        </div>
        <div class="form-group" id="pay-now" >
            <button type="submit" class="btn btn-default" >Confirmar Pago</button>
        </div>
    </form>
</div>
</div>