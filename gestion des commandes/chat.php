 <?php
session_start();

 ?>



<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=commandes;charset=utf8", "root", "");



if(isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message']) )

{
    $pseudo = htmlspecialchars($_POST['pseudo'] );
    $message = htmlspecialchars($_POST['message'] );
$date = date("d-m-Y");
$heure = date("H:i");
    $insertmsg = $bdd->prepare('INSERT INTO Chat(pseudo, message) VALUES(?, ?)');
    $insertmsg->execute(array($pseudo, $message));
}

?>










                             <form method="post" action="">
                                 <table align="center">
                                      <tr>
        <td height="46" width="35%">
            <h4> PSEUDO</h4>
        </td>
        <td width="63%" height="46"><input type="text" name="pseudo" class="form-control" placeholder="PSEUDO" value="<?php if(isset($pseudo)) {echo $pseudo;}  ?>"></td>
    </tr>


                                     <tr>
        <td width="35%">
            <h4>MESSAGE</h4>
        </td>
        <td width="63%"><textarea  name="message" class="form-control"  placeholder="Message" ></textarea></td>
    </tr>



                                    <tr>
                                        <td></td>
        <td ><input type="submit" class="btn btn-primary btn-block" value="ENVOYER MESSAGE"></td>
    </tr>




                                 </table>



                             </form>
                             <br><br>

                             <table align="center">

<td>
                             <?php 
              
                               $allmsg = $bdd->query('SELECT * FROM Chat ORDER BY id DESC');

                               while ($msg = $allmsg->fetch()) 
                                {
                                   
                               
                              ?>
                              <b> <?php echo $msg['pseudo']; ?>:  </b><?php echo $msg['message']; ?> <br>
                              <?php 
                              }

                               ?>
                           </td>
                           <td></td>



</table>







































                    <!--content-->               
                </div><!--content page-->
            </div><!--end wrapper-->
        </div>
      
    </body>

<!-- Mirrored from html.designstream.co.in/pink-desh/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:40:58 GMT -->
</html>
