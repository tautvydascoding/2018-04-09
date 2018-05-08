   
<!-- FOOTER STARTS -->

      <footer id="susirasom" class="bg-light">
        <div class="questions row aukstis-400">
          <div class="col-md-4 col-sm-12 col-xs-12 d-flex align-items-end justify-content-center">
            <form class="text-center" action="javascript:alert( 'success!' );" method="post">
              <input class="rounded border border-secondary" type="text" name="vardas" placeholder="Jūsų vardas" ><br />
              <textarea class="rounded border border-secondary" name="klausimas" rows="8" cols="25" required placeholder="Klauskite"></textarea><br />
              <input class="rounded border border-secondary" type="email" name="pastas"  required placeholder="El. paštas"><br />
              <input class="rounded border border-secondary" type="submit" name="submit" value="Klausti">
            </form>
          </div>

          <div class="col-md-8 col-xs-12">
            <div class="adresas row aukstis-100 text-center">
              <div class="col-md-6">
                <h4>Kontaktai<br></h4>
                <?php 
                  $contacts1 = getContacts(1);
                ?>
                <p><?php echo $contacts1['adresas'] . ", ", $contacts1['miestas'] . " ", $contacts1['tel'] . ", ", $contacts1['email']; ?></p>
               </div>
            </div>
            <div class="socTinklaiZemelapis row d-flex justify-content-center">
              <div class="socTinklai col-md-4 aukstis-300 d-flex justify-content-around align-items-center flex-column fa-3x py-4">
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook fablack"></i></a>
                <a href="https://plus.google.com" target="_blank"><i class="fab fa-google-plus-square fablack"></i></a>
                <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram fablack"></i></a>
              </div>
              <div class="zemelapis col-md-8 aukstis-300 p-0 m-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2292.0527392511726!2d23.887942315392195!3d54.9370929620725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e71f30d8cd391b%3A0x68680dce2fbdcf65!2zS3VyxaFpxbMgZy4gNywgS2F1bmFzIDQ4MTA5!5e0!3m2!1sen!2slt!4v1525763461846" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </footer>
    

<!-- FOOTER - ENDS -->

    </div>



    <!-- Optional JavaScript -->
    <script src="../assets/scripts/main.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
