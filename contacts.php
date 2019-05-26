<?php require_once("head.php");?>
<?php require_once("header.php");?>
<div id="production" class="container bg-light p-5">
  <div class="row ">
    <div class="col">
      <h1 class="text-center">Kontaktai</h1>
      <div class="row">
          <div class="col">
            <article class="">
              <p class="rekvizitai">Direktorius: Vytas Jasevičius; <br> Tel. nr.: +370 698 19054; <br> El.paštas: vytas.kertas@gmail.com; <br> Adresas: Alytaus g. 43, Krosna, Lazdijų rajonas;</p><hr>
              <div class="text-center" >
                <input id="sendMessageName" class="contacts-form mb-2" type="text" name="" value="" placeholder="vardas*" required><br>
                <input id="sendMessageEmail" class="contacts-form mb-2" type="email" name="" value="" placeholder="email*" required><br>
                <input id="sendMessagePhone" class="contacts-form mb-2" type="text" name="" value="" placeholder="tel. nr.:*" required><br>
                <textarea id="sendMessageMessage" class="contacts-form mb-2" name="name" rows="8" cols="80" placeholder="Jūsų žinutė*" required></textarea><br>
                <button  class=" btn btn-success mb-2" onclick="sendMessage()">Išsiųsti</button>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php require_once("footer.php");?>
