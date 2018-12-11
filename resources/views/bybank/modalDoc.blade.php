<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modalDoc">
    <div class="modal-dialog">
        <h1>It is working</h1>
        <form method="post" action="{{ action('ClientController@saveDocuments') }}" >
            {{csrf_field()}}
            <label for="">ClientId</label>
            <input type="text" value="" name="client_id"><br><br>
            <label for="">Token</label>
            <input type="text" value="" name="token"><br><br>
            <label for="">file</label>
            <input type="file" value="" name="file"><br><br>
            <label for="">Category</label>
            <input type="text" value="" name="category"><br><br>
            <label for="">Description</label>
            <input type="text" value="" name="description"><br><br>
            <label for="">Metadata</label>
            <input type="text" value="" name="metadata"><br><br>
            <input type="submit" value="Gravar">
        </form>
    </div>

</div>


