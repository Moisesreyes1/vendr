<!-- <form action='/deliveries/{{$delivery->id}}/edit' method='post'>
    <label for='message'>Message</label>
    <input type='text' name='message' value='{{$delivery->comment}}'>
    <input type='hidden' name='_token' value='{{csrf_token()}}'>
    <input type='submit' name='submit' value='submit'>
</form> -->

<style>

body {
    background: url("/images/pencil.jpg") no-repeat top center fixed;
    background-size: cover;
}

.containerForm {
    background: lightgray;
    width: 35%;
    height: 22%;
    position: absolute;
    top: 176px;
    left: 521px;
    border: 1px solid black;
}

h3 {
    font-size: 25px;
    margin: 0;
}

form {
    text-align: center;
}

.messageBox {
    height: 75px;
}

.goback {
    color: white;
}

.goback:hover {
    color: white;
}

button {
    margin-top: 3px;
}
</style>



<div><a class="goback" href="{{ route('deliveries.index') }}">Go back</a></div>
<div class='containerForm'>
    <form action='/deliveries/{{$delivery->id}}/edit' method='post'>
        <h3>Message</h3>
        <div class='form-group'>
        <textarea class='messageBox' type='text' name='message' value='{{$delivery->comment}}' rows='3'></textarea>
        <!-- <input class='messageBox' type='text' name='message' value='{{$delivery->comment}}'> -->
        <input type='hidden' name='_token' value='{{csrf_token()}}'>
        </div>
        <button type='submit' class='btn btn-primary' name='submit' value='submit'>Submit</button>
    </form>
</div>

