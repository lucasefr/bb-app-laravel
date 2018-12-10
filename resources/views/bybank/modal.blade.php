<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modalBal">
    <div class="modal-dialog">
        <h1>It is working</h1>
        <form method="post" action="{{ action('ClientController@save') }}">
            {{csrf_field()}}
            <label for="">Nome</label>
            <input type="text" value="" name="name"><br><br>
            <label for="">website</label>
            <input type="text" value="" name="website"><br><br>
            <label for="">email</label>
            <input type="text" value="" name="email"><br><br>
            <label for="">phone</label>
            <input type="text" value="" name="phone"><br><br>
            <label for="">description</label>
            <input type="text" value="" name="description"><br><br>
            <label for="">mcc</label>
            <input type="text" value="" name="mcc"><br><br>
            <label for="">metadata</label>
            <input type="text" value="" name="metadata"><br><br>
            <label for="">ein</label>
            <input type="text" value="" name="ein"><br><br>
            <label for="">owner_first_name</label>
            <input type="text" value="" name="owner_first_name"><br><br>
            <label for="">owner_last_name</label>
            <input type="text" value="" name="owner_last_name"><br><br>
            <label for="">owner_email</label>
            <input type="text" value="" name="owner_email"><br><br>
            <label for="">owner_phone</label>
            <input type="text" value="" name="owner_phone"><br><br>
            <label for="">owner_cpf</label>
            <input type="text" value="" name="owner_cpf"><br><br>

            <label for="">Endereço</label><br><br>
            <label for="">street_address</label>
            <input type="text" value="" name="street_address"><br><br>
            <label for="">complement</label>
            <input type="text" value="" name="complement"><br><br>
            <label for="">additional_info</label>
            <input type="text" value="" name="additional_info"><br><br>
            <label for="">neighborhood</label>
            <input type="text" value="" name="neighborhood"><br><br>
            <label for="">city</label>
            <input type="text" value="" name="city"><br><br>
            <label for="">state</label>
            <input type="text" value="" name="state"><br><br>
            <label for="">postal_code</label>
            <input type="text" value="" name="postal_code"><br><br>
            <label for="">country_code</label>
            <input type="text" value="" name="country_code"><br><br>


            <input type="submit" value="Gravar">

        </form>
    </div>

</div>


