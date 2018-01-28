<form action='/deliveries/{{$delivery->id}}/edit' method='post'>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</form>


<!-- <form action='/deliveries/{{$delivery->id}}/edit' method='post'>
    <label for='message'>Message</label>
    <input type='text' name='message' value=''>
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
    height: 30%;
    position: absolute;
    top: 176px;
    left: 521px;
    border: 1px solid black;
}

    form {
        text-align: center;
    }

button {
    margin-top: 3px;
}
</style>

<div class="containerForm">
    <form action='/deliveries/{{$delivery->id}}/edit' method='post'>
        <h3>Message</h3>
        <div class="form-group">
        <input type='text' name='message' value='{{$delivery->comment}}'>
        <input type='hidden' name='_token' value='{{csrf_token()}}'>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
    </form>
</div>

<!-- <form action='/deliveries/{{$delivery->id}}/edit' method='post'>
    <label for='message'>Message</label>
    <input type='text' name='message' value='{{$delivery->comment}}'>
    <input type='hidden' name='_token' value='{{csrf_token()}}'>
    <input type='submit' name='submit' value='submit'>
</form> -->

