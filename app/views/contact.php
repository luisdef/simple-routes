<?php $this->layout("master"); ?>

<h1>Contact</h1>

<form method="post" action="/contact">
    <input type="text" name="name" placeholder="Name...">
    <input type="email" name="email" placeholder="Email...">
    <button type="submit">Send</button>
</form>
