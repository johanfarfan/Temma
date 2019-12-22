<div class="container" style="font-size: x-large;">
    <h1 class="display-3 mb-4"><span class="text-danger">Con</span><span class="text-primary">tact&eacute;nos</span></h1>
    <div class="row mb-4 border rounded border-secondary bg-light p-3">
        <div class="col">
            <p>¿Necesita solicitar un presupuesto? ¿Tiene alguna reclamo o sugerencia?</p>
            <p>Nos encantaría saberlo, déjenos un mensaje con respecto a cualquier consulta que tenga y nos pondremos en contacto con usted lo antes posible</p>
        </div>
        <div class="col" style="font-size:initial;">
            <form action="contact.php" method="post">
                <label for="formName">e-mail </label><br>
                <input type="email" name="formEmail" placeholder=""><br>
                <label for="formSubject">Subject </label><br>
                <input type="text" name="formSubject" placeholder=""><br>
                <label for="formMessage">Message </label><br>
                <textarea name="formMessage" id="" cols="22" rows="5"></textarea><br><br>
                <input class="btn btn-outline-primary" type="submit" name="submit">
            </form>
        </div>
    </div>  
</div>