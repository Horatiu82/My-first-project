<?php

class GeamuriController extends AppController
{
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {

        session_start();

        if (isset($_SESSION['user'])) {
            $data['title'] = 'Geamuri';
            $data['mainContent'] = "<h1 class='display-3 text-info'> Geamuri KariPlast</h1>
      <div class='geamuriKari '>
        <div class='card bg-secondary' style='width: 20rem;'>
          <img class='card-img-top' src='app/images/geamuri/geam1.png' alt='geam1'>
         <div class='card-body'>
         <p class='card-text  text-light'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         </div>
         </div>
      
         <div class='card bg-secondary' style='width: 20rem;'>
         <img class='card-img-top' src='app/images/geamuri/geam2.png' alt='geam2'>
         <div class='card-body'>
         <p class='card-text text-light'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

     <div class='card bg-secondary' style='width: 20rem;'>
     <img class='card-img-top' src='app/images/geamuri/geam3.png' alt='geam3'>
     <div class='card-body'>
     <p class='card-text text-light'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     </div>
     </div>
      
     <div class='card bg-secondary' style='width: 20rem'>
     <img class='card-img-top' src='app/images/geamuri/geam4.png' alt='geam4'>
     <div class='card-body'>
     <p class='card-text text-light'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     </div>
     </div>

     <div class='card bg-secondary' style='width: 20rem'>
     <img class='card-img-top' src='app/images/geamuri/geam5.png' alt='geam5'>
     <div class='card-body'>
     <p class='card-text text-light'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     </div>
     </div>
      

      </div>";
            echo $this->render(APP_PATH . VIEWS . 'layoutAuth.html', $data);
        } else {
            $data['title'] = 'Geamuri';
            $data['mainContent'] =
                "<h1 class='display-3 text-info'> Geamuri KariPlast</h1>
                <p class='text-light'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus
                eos
                ratione ad a in
                laboriosam commodi magni, mollitia provident, aspernatur sed doloremque. Delectus aperiam
                quis
                dolores facere sequi suscipit magni, quae quas. Maxime recusandae corporis laboriosam
                sapiente
                delectus dolor rerum odio libero illum quibusdam, distinctio quisquam ipsam perspiciatis
                dignissimos corrupti minima exercitationem saepe, possimus soluta. Architecto nisi itaque
                magnam
                ut voluptatum aliquam doloremque quis natus sunt cum magni, non unde possimus eveniet quae
                illo
                et consequuntur doloribus necessitatibus quaerat recusandae. Autem labore distinctio est
                quia
                cum ullam unde illo, repudiandae dicta dolor beatae repellat, consectetur, obcaecati ipsa
                explicabo eaque voluptate dolorum exercitationem doloribus voluptatem. Recusandae inventore,
                repellendus asperiores veniam eius repellat at officiis quas maxime ea hic illum facere.
                Voluptates quo architecto sed. Quod veniam quam rem omnis veritatis totam, eveniet corporis,
                temporibus eos sed repellendus, eum distinctio. Esse minus atque, ad quibusdam architecto,
                dolores id dignissimos officia a laudantium, repudiandae deleniti est nesciunt aut amet.
                Dolores, aspernatur id repellat, ad consequatur dignissimos deserunt necessitatibus officia
                minima eius eos obcaecati odit alias, iure incidunt voluptatibus vel perspiciatis architecto
                fugiat tenetur provident nemo dolore. Aperiam asperiores error ipsa eveniet laborum fugit
                voluptates unde ea quo nihil voluptas nulla dolores, aliquid doloribus id excepturi nobis
                molestiae debitis! Similique, porro. Dolorem at recusandae, omnis exercitationem cum itaque
                architecto praesentium magni deleniti, repudiandae quasi fugit quas aut repellendus mollitia
                consequatur labore aspernatur expedita nihil alias consectetur reiciendis molestias? Dolore
                est
                impedit nam suscipit, magnam tempore nulla tempora enim cupiditate eveniet, soluta
                distinctio
                corrupti iure sequi neque, dolorum ducimus! Eius tempore aperiam nulla ratione provident id
                tempora corporis quam recusandae voluptatibus eum at facere, sunt repellendus exercitationem
                ipsam non optio numquam voluptas distinctio earum dicta. Veritatis quae fugit officiis quod
                saepe nulla, odit facere culpa, quibusdam optio laborum laboriosam provident mollitia
                praesentium tempore quasi dolores, magni porro nihil expedita? Soluta minus magni tenetur
                aperiam omnis facere accusantium debitis ratione dolor sed, expedita tempora possimus
                necessitatibus hic nemo numquam est officiis blanditiis inventore aliquid! Dignissimos,
                dolorum
                ratione.</p>
                ";


            echo $this->render(APP_PATH . VIEWS . 'layout.html', $data);
        }
    }
}
