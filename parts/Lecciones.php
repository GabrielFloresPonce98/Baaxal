

<?php 
//Incluimos querys
include("../php/querys.php");
//Obtenemos el valor de la leccion
switch($_GET['leccion']){
  //Si la leccion uno se muestra la leccion uno
  case 1:
    leccionParte1();
    break;
    //En el caso 2 se muestra la leccion 2
    case 2:
      leccionParte2();
      break;
      case 3:
        //En la leccion 3 
        leccionParte3();
        break;

        case 4:
          // em el casp 4 primero comprobaremos si ya se hizo este examen
          if(comprobarExamen(ID_Usuario())==0){
            //En el caso que no se muestra el cuerpo del examen
              examenBasico();
        
          }else{
            //En otro caso avisaremos que no puede presentar este examen con un 1 
            //porque ya lo presento
            echo "1";
           
          }
       
          break;
}

?>


<?php
function leccionParte1(){
    echo '<div class="section-container" style="color: black;">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <h1 class="text-center">Personal Pronouns</h1>
          <p>
            <strong>the pronoun acts as the subject (subject pronouns)</strong>
            In English, a distinction is made between when 
            of the sentence, as opposed to instances when it is 
            <strong>used in the function of an object (object pronouns)</strong>
          </p>
          <table style="
          background: #494fff5c;
          color: black;
      " class="table">
            <thead style="
           border-radius: 20px; 
            background: #4b68f3;">
              <tr>
                <th scope="col">Personal pronouns
                  <br>
                  (Subject Pronouns)
                </th>
                <th scope="col">Example</th>
              
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">I</th>
                <td>I am ill</td>
              </tr>

              <tr>
                <th scope="row">You</th>
                <td>You are tall</td>
              </tr>

              <tr>
                <th scope="row">He</th>
                <td>He</td>
              </tr>

              <tr>
                <th scope="row">She</th>
                <td>She is pretty</td>
              </tr>
             
              <tr>
                <th scope="row">It</th>
                <td>It is cold today</td>
              </tr>

              <tr>
                <th scope="row">We</th>
                <td>We are tired</td>
              </tr>

              <tr>
                <th scope="row">You</th>
                <td>You are hungry</td>
              </tr>

              <tr>
                <th scope="row">They</th>
                <td>They are at the cinema</td>
              </tr>
             
            </tbody>
          </table>


          <table style="
          background: #494fff5c;
          color: black;
      " class="table">
            <thead style="
           border-radius: 20px; 
            background: #4b68f3;">
              <tr>
                <th scope="col">Personal pronouns
                  <br>
                  (Object Pronouns)
                </th>
                <th scope="col">Example</th>
              
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Me</th>
                <td>Can you help me?</td>
              </tr>

              <tr>
                <th scope="row">You</th>
                <td>I can help you?</td>
              </tr>

              <tr>
                <th scope="row">Him</th>
                <td>Can you see him?</td>
              </tr>

              <tr>
                <th scope="row">Her</th>
                <td>Give it to her</td>
              </tr>
             
              <tr>
                <th scope="row">It</th>
                <td>Give it a kick</td>
              </tr>

              <tr>
                <th scope="row">Us</th>
                <td>Can you see us?</td>
              </tr>

              <tr>
                <th scope="row">You</th>
                <td>I see you</td>
              </tr>

              <tr>
                <th scope="row">Them</th>
                <td>He can help them</td>
              </tr>
             
            </tbody>
          </table>

          <p style="border: solid;
          border-color: #757171;
          color: #887f7f;">
            <img src="assets/images/axolotllv1.png">
           <strong>Note: The formal forms of "</strong>
           you*" that are a part of some other languages, do not exist in English*. 
           As such, native English speakers have no concept of the “formal” in this sense.
            <br> <br> Also, it is important to remember that <strong>there is no distinction between the singular or plural forms of "

            </strong>you*" in English*. It is only in the reflexive pronouns that we distinguish between these two forms:
             <strong>yourself</strong> (singular) and <strong>yourselves</strong> (plural).</p>


          
          
          
       </div>
      </div>
    </div>
  </div>

  <div class="section-container" style="color: black;" >
    <div class="container">
      <div class="row section-container-spacer">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <h2 class="text-center">Neuter Form</h2>
          <div class="section-container-spacer" >
            <p><strong>Pronouns</strong> in English distinguish gender and include the <strong>neuter form</strong> “<strong>it</strong>”, as demonstrated in the pronouns table above.</p>
            <p>The neuter form is used to refer to things, animals for which we do not know the sex, as well as the time and the weather. The plural form of “<strong>it</strong>” is “<strong>they</strong>”.</p></div>
          
          <h4>Examples:</h4>
          <ul>
            <li>Where is it [the book]?</li>
           <li>What time is it?</li> 
           <li>It is raining. </li>
           <p style="border: solid;
           border-color: #757171;
           color: #887f7f;">
            <img src="assets/images/axolotllv1.png">
            <strong>Note:</strong> The neuter form “<strong>it</strong>” is a very important grammatical component of English and one that non-native speakers tend to forget. 
          </p>

          </ul>
          </div>  
          
        </div>  
      </div>
    </div>
  </div>


  <div class="section-container" style="color: black;">
    <div class="container">
      <div class="row section-container-spacer">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <h2 class="text-center">Function</h2>
          <div class="section-container-spacer">
            <p><strong>1. The pronoun as subject:</strong></p>
            <p><strong>The subject of a sentence is the the person or thing that performs the action of the verb</strong>. Subject pronouns are used when the pronoun is the subject of the sentence. <strong>In English, the subject pronoun is mandatory</strong>, as opposed to some other languages, where the subject is optional.</p>
          <h4>Examples:</h4>
          <ul>
            <li>	I am ill. <br>
              Subject = I</li>


           <li>	You are tall.<br>
            Subject = you
            </li> 

            <li>He is handsome.<br>
              Subject = he
              </li> 

              <li>We are tired.<br>
                Subject = we
                </li> 
           
            

          </ul>
          <p><strong>2. The pronoun as subject:</strong></p>
          <p>Object pronouns <strong>function as the object of a verb</strong> and are located after the verb that they complement or after prepositions such as “<strong>for</strong>”, “<strong>to</strong>”, “<strong>with</strong>” and “<strong>at</strong>”.</p>
          <h4>Examples:</h4>
          <ul>
            <li>		I can help you. <br>
              Subject = I, Object = you</li>


           <li>	Can you see him? <br>
            Subject = you, Object = him
            </li> 

            <li>He is going to the party with us.<br>
              Subject = he, Object = us
              </li> 

              <li>It [the letter] is for you.<br>
                Subject = it, Object = you
                </li> 
           
            

          </ul>  
        

          <button id="avanzar" onclick = "avanzarLecciones()" class="btn btn-primary">Avanzar</button>
  <button id="retroceder"  onclick = "retrocederLecciones()" class="btn btn-primary">Atras</button>
        </div>  
          
        </div>  
      </div>
    </div>
  </div>

 ';
}





function leccionParte2(){
        echo '<div class="section-container" style="color: black;">
              <div class="container">
                  <div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
      <h1 class="text-center">Possessives</h1>
      
        <p>There are two types of possessives which are determined by their function in the sentence.</p>
     
      <table style="
      background: #494fff5c;
      color: black;
          " class="table">
        <thead style="
       border-radius: 20px; 
        background: #4b68f3;">
          <tr>
            <th scope="col">Possessive Determiners
            </th>
            <th scope="col">Example</th>
          
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">My</th>
            <td>This is my house</td>
          </tr>

          <tr>
            <th scope="row">Your</th>
            <td>This is your book</td>
          </tr>

          <tr>
            <th scope="row">His</th>
            <td>This is his bicycle</td>
          </tr>

          <tr>
            <th scope="row">Her</th>
            <td>This is her dress</td>
          </tr>
         
          <tr>
            <th scope="row">Its</th>
            <td>The dog doesn`t like to be on its own</td>
          </tr>

          <tr>
            <th scope="row">Our</th>
            <td>These are our suitcases</td>
          </tr>

          <tr>
            <th scope="row">Your</th>
            <td>These are your seats</td>
          </tr>

          <tr>
            <th scope="row">Their</th>
            <td>These are their books</td>
          </tr>
         
        </tbody>
      </table>
      <p style="border: solid;
      border-color: #757171;
      color: #887f7f;">
        <img src="assets/images/axolotllv1.png">
        <strong>Note</strong>: We only use the possessive pronoun “<strong>its</strong>” with the adjective “<strong>own</strong>”.

      <table style="
      background: #494fff5c;
      color: black;
  " class="table">
        <thead style="
       border-radius: 20px; 
        background: #4b68f3;">
          <tr>
            <th scope="col">Possessive Pronouns
              
            </th>
            <th scope="col">Example</th>
          
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Mine</th>
            <td>This book is mine</td>
          </tr>

          <tr>
            <th scope="row">Your</th>
            <td>Is this book yours</td>
          </tr>

          <tr>
            <th scope="row">His</th>
            <td>This bicycle is his</td>
          </tr>

          <tr>
            <th scope="row">Hers</th>
            <td>The dress is hers</td>
          </tr>
         
          <tr>
            <th scope="row">Its</th>
            <td>The house is its [the cat`s] </td>
          </tr>

          <tr>
            <th scope="row">Ours</th>
            <td>The sultcase are ours</td>
          </tr>

          <tr>
            <th scope="row">yours</th>
            <td>These seats are yours</td>
          </tr>

          <tr>
            <th scope="row">Theirs</th>
            <td>This pencil is theirs</td>
          </tr>
         
        </tbody>
      </table>
      <p><strong>Possessive determiners and pronouns</strong> vary according to the possessor and not to whether the object is in singular or plural, as in some other languages such as Spanish.</p>
      <div>
        <ul  style="border: solid;  border-radius: 10px;">
          <li>My book</li>
         <li>His book</li> 
         <li>My books</li>
         <li>His books</li>
         </ul>

      </div>

                </div>
               </div>
          </div>
            </div>
        <div class="section-container" style="color: black;">
                <div class="container">
  <div class="row section-container-spacer">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
      <h2 class="text-center">Function</h2>
      <div class="section-container-spacer">
        <p><strong>1. The possessive as determiner:</strong></p>
        <p>These pronouns function as the determinative article of the noun that they accompany and therefore precede the object.</p>
      <h4>Examples:</h4>
      <ul>
        <li>	My car is blue </li>


       <li>	His house is big
        </li> 

       
        

      </ul>
      <p><strong>2. The pronoun as subject:</strong></p>
      <p>In this case, the possessive pronoun acts as a direct complement</p>
      <h4>Examples:</h4>
      <ul>
        <li>The blue car is mine</li>


       <li>	The big house is his
        </li> 

       
        

      </ul>  
      <p style="border: solid;
      border-color: #757171;
      color: #887f7f;">
       <img src="assets/images/axolotllv1.png">
       <strong>Note:</strong>These examples respond to the question <strong>`Whose is this?`</strong>
     </p>
    </div>  
      
    </div>  
  </div>
</div>
</div>

        <div class="section-container" style="color: black;" >
      <div class="container">
  <div class="row section-container-spacer">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
      <h2 class="text-center">Possessive Pronouns vs. The Genitive Case</h2>
      <div class="section-container-spacer" >
        <p>The <strong>“-’s”</strong> termination which indicates the genitive is not to be confused with the possessive determiners. As such, we can say: :</p>
        <ul>
          <li>Her dress ...</li>
         </ul>
         Or
         <ul>
          <li>Andrea1s dress ...</li>
         </ul>
         <p><strong>In both cases we are expressing a possession and a possessor</strong>; in this case, the dress. In the first sentence, the possessive determiner <strong>“her”</strong> indicates that both the speaker and the listener know who is being referred to; whereas in the second sentence, the speaker wants to acknowledge the name of the possessor.</p>
         <h6>Grammatical Rules</h6>
         <p><strong>1. We always use the genitive to refer to people:</strong></p>
         <h4>Examples:</h4>
         <ul>
           <li>	Paul1s house ... </li>
 
          <li>	His house is big
           </li> 
           </ul>
           <p><strong>2. We can also use the genitive at the end of a sentence when it is used in response to a prior question.</strong> In this case, we do not need to use the noun.</p>
           <h4>Examples:</h4>

           <h4>Question:</h4>
           <ul>
             <li>	Where is your sister</li>
            </ul>
            <h4>Answer:</h4>
            <ul>
              <li>	She is at my parents`. </li>
             </ul>
             <h4>Question:</h4>
             <ul>
               <li>	Whose house is this? </li>
              </ul>
              <h4>Answer:</h4>
             <ul>
               <li>	It is Michael1s </li>
              </ul>

            <p><strong>3. When there is more than one possessor, the apostrophe comes after the `s`.</strong></p>
            <h4>Examples:</h4>
            <ul>
              <li>	The girl1s toys</li>
    
             <li>	The students` exams ...
              </li> 
             </ul>
      
      
      
      
      
      
      
      
      
      
      <p style="border: solid;
       border-color: #757171;
       color: #887f7f;">
        <img src="assets/images/axolotllv1.png">
        <strong><span class="caps">WARNING</span>!</strong> <br> When the name of the possessor ends in <strong>`s`</strong>, we do not add the genitive <strong>`-`s`</strong> termination, but only the apostrophe after the <strong>“s”</strong> of the possessor`s name.
      </p>

      </ul>

      <button id="avanzar" onclick = "avanzarLecciones()" class="btn btn-primary">Avanzar</button>
      <button id="retroceder"  onclick = "retrocederLecciones()" class="btn btn-primary">Atras</button>
      </div>  
      
    </div>  
  </div>
</div>
</div>';
}

function leccionParte3(){
    echo '<div class="section-container" style="color: black;">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <h1 class="text-center">Demonstrative Pronouns</h1>
          
            <p><p>It is important to first explain that <strong>demonstrative pronouns</strong> can be <strong>singular or plural</strong> and that they <strong>make reference as well to distance</strong>.</p></p>
         <ul>
          <li>This</li>
          <li>That</li>
          <li>Thiese</li>
          <li>Those</li>
          
         </ul>
         <p><strong>Examples</strong></p>
         <ul>
  
  
           <p>Singular and `here`:</p>
          <li> I like This car</li>
          <br>
  
          <p>Singular and `there`:</p>
          <li> I like that car</li>
          <br>
  
          
          <p>Plural and `here`:</p>
          <li> I like these cars</li>
          <br>
  
          
          <p>Plural and `there`:</p>
          <li> I like those car</li>
          <br>
        
          
         </ul>
         <p><strong>Demonstrative pronouns</strong> can be accompanied by a noun, as in the examples above, or they may be found alone, as in the following examples.</p> 
         <h4>Examples:</h4>
  
             <h4>Singular and `here`:</h4>
             <ul>
               <li>	I like this car</li>
              </ul>
              <h4>Singular and `there`:</h4>
              <ul>
                <li>	I like that car. </li>
               </ul>
               <h4>Plural and `here`:</h4>
               <ul>
                 <li>	I like these cars. </li>
                </ul>
                <h4>Plural and `there`:</h4>
               <ul>
                 <li>	I like those cars </li>
                </ul>
                <p><strong>Demonstrative pronouns</strong> can be accompanied by a noun, as in the examples above, or they may be found alone, as in the following examples.</p>
                <h4>Examples</h4>
             <ul>
               <li>This is a good book</li>
               <li>	I like this car</li>
              </ul>
  
          </div>
       
        </div>
      </div>
    </div>
  </div>
  
  <div class="section-container" style="color: black;" >
    <div class="container">
      <div class="row section-container-spacer">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <h2 class="text-center">Other Uses of Demostrative Pronouns</h2>
          <div class="section-container-spacer" >
           
             </ul>
  
             <p><strong>1.  We use “<strong>this</strong>” when we present ourselves to someone on the telephone.</strong></p>
             <h4>Examples:</h4>
             <ul>
               <li>	Hello. This is Alicia.</li>
               </ul>
  
               <p><strong>2. We use “<strong>that</strong>” when we are not sure with whom we are speaking.</p>
               <h4>Examples:</h4>
               <ul>
                 <li>Peter, is that you?</li>
                 </ul>
  
                 <p><strong>3. We use “<strong>this</strong>” when we are introducing people</p>
                 <h4>Examples:</h4>
                 <ul>
                   <li>	Lucy, this is my friend Jill.</li>
                   </ul>
  
                   <p><strong>4.“<strong>That</strong>” can be used to refer to something in the past.></p>
                   <h4>Examples:</h4>
                   <ul>
                     <li>That pizza was Delicious.</li>
                     </ul>
          <p style="border: solid;
           border-color: #757171;
           color: #887f7f;">
            <img src="assets/images/axolotllv1.png">
          <strong>Note:</strong> “<strong>That pizza</strong>” can be either a pizza we just finished eating or one that we ate on our holidays last year.
          </p>
  
          </ul>
          <button id="avanzar" onclick = "avanzarLecciones()" class="btn btn-primary">Avanzar</button>
          <button id="retroceder"  onclick = "retrocederLecciones()" class="btn btn-primary">Atras</button>
          </div>  
          
        </div>  
      </div>
    </div>
  </div>';

}
function examenBasico(){
  echo '
  <section id="secbasico">
  <form>
  <div class="section-container" style="color: black;">
  <div class="container">
    <div class="row">
      <div>
         <div>
            <div>
              <h1 class="Titulo_De_preguntaBasico"></h1>
            </div>
         
               <div>
                 <ul>
                   <li>
                     <div>
                       <input  type="radio" class="op1" data-msg-required="Choose one of the options" name ="respuestaB" required="required"  ria-required="true" value="A" >
                       <label class = "text1Basico"></label>
                     </div>
                   </li>
                   <li>
                     <div>
                       <input  data-msg-required="Choose one of the options" required="required" name ="respuestaB" type="radio"   aria-required="true" value="B">
   
   
                       <label class = "text2Basico"></label>
                     </div>
                   </li>
                   <li>
                     <div>
                       <input  data-msg-required="Choose one of the options" required="required" name ="respuestaB" type="radio" aria-required="true" value="C" >
                       <label class = "text3Basico"></label>
                     </div>
                   </li>
                   
                   <li>
                    <div>
                      <input  data-msg-required="Choose one of the options" required="required" name ="respuestaB" type="radio" aria-required="true" value="D" >
                      <label class = "text4Basico"></label>
                    </div>
                  </li>
                  
                 </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
</section>
 ';
}
?>