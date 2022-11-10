<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortController;

// Route::get('/', function () {
//     return view('home',[
//         "title" => "Home"
//     ]);
// });

// Route::get('/about', function () {
//     return view ('about', [
//         "title" => "About",
//         "name" => "Gabriel Rolly Davinsi",
//         "email" => "gabriel.davinsi@binus.ac.id",
//         "picture" => "emo.jpg",
//         "flat" => "flat.png",
//         "nim" => "(2440071582)"
//     ]);
// });

Route::get('/', [PortController::class, 'myHome']);
Route::get('/about', [PortController::class, 'aboutMe']);
Route::get('/ports', [PortController::class, 'index']);
Route::get('/ports/{subtitle}', [PortController::class, 'detailProject']);

// Route::get('/ports', function () {

//     return view ('ports',[
//         "title" => "MyPortfolios",
//         "ports" => Port::all()
//     ]);
// });


// Route::get('/ports', function () {
//     return view ('ports',[
//         "title" => "MyPortfolios",
//         "ports" => 
//         [
//             [
//                 "image" => "entre.jpg",
//                 "title" => "Portofolio Pertama",
//                 "name" => "Project Entrepreneurship",
//                 "subtitle" => "project-entrepreneurship",
//                 "description" => "Amet dicta numquam modi voluptate odio velit ipsum dolores veniam, tempora, cum corrupti sunt impedit expedita earum animi consectetur tenetur quaerat laboriosam repellendus provident? "
//             ],
        
//             [
//                 "image" => "web.jpg",
//                 "title" => "Portofolio Kedua",
//                 "name" => "Project Human and Computer Interaction",
//                 "subtitle" => "project-human-and-computer-interaction",
//                 "description" => "Nostrum minima officia consequatur ipsam dolorum impedit qui. Quas cumque nihil molestias voluptatibus."
//             ],
    
//             [
//                 "image" => "prog.jpg",
//                 "title" => "Portofolio Ketiga",
//                 "name" => "Project Web Programming",
//                 "subtitle" => "project-web-programming",
//                 "description" => "Ad, excepturi earum. At delectus laboriosam possimus amet facere ullam quos veniam pariatur dicta itaque, ex veritatis vitae molestias ad unde porro nisi voluptate quod tenetur deserunt."
//             ],
//             [
//                 "image" => "grafis.jpg",
//                 "title" => "Portofolio Keempat",
//                 "name" => "Project Design Graphic",
//                 "subtitle" => "project-design-graphic",
//                 "description" => "Ad, excepturi earum. At delectus laboriosam possimus amet facere ullam quos veniam pariatur dicta itaque, ex veritatis vitae molestias ad unde porro nisi voluptate quod tenetur deserunt, minus commodi laudantium sed."
//             ]
//         ]
//     ]);
// });


// Route::get('ports/{subtitle}', function($subtitle){
//     $ports_post = [
//         [
//             "image" => "entre.jpg",
//             "title" => "Portofolio Pertama",
//             "name" => "Project Entrepreneurship",
//             "subtitle" => "project-entrepreneurship",
//             "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum vel maiores accusamus dolor sed earum enim culpa, numquam sit ut eius adipisci eligendi exercitationem. Consectetur quam soluta quisquam ad recusandae aut omnis fugit esse debitis, labore laudantium, magnam doloremque aliquam exercitationem dolorem provident non accusantium sequi natus vitae, illo autem minus voluptas eos? Consectetur, dignissimos. Amet dicta numquam modi voluptate odio velit ipsum dolores veniam, tempora, cum corrupti sunt impedit expedita earum animi consectetur tenetur quaerat laboriosam repellendus provident? Assumenda fugiat similique odit? Consectetur, eligendi voluptatem ipsa reiciendis officiis incidunt ad voluptatum modi, repudiandae repellat expedita beatae neque? Numquam, quaerat!"
//         ],
    
//         [
//             "image" => "web.jpg",
//             "title" => "Portofolio Kedua",
//             "name" => "Project Human and Computer Interaction",
//             "subtitle" => "project-human-and-computer-interaction",
//             "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, excepturi earum. At delectus laboriosam possimus amet facere ullam quos veniam pariatur dicta itaque, ex veritatis vitae molestias ad unde porro nisi voluptate quod tenetur deserunt, minus commodi laudantium sed. Odit fugit dignissimos magni sed aliquid consequuntur eveniet, obcaecati ea veritatis ex dolorem harum, minus nostrum minima officia consequatur ipsam dolorum impedit qui. Quas cumque nihil molestias voluptatibus possimus commodi ea qui maiores corporis dolores dicta, inventore sapiente adipisci unde vel expedita tenetur enim praesentium deleniti magnam. Enim, officiis quos."
//         ],

//         [
//             "image" => "prog.jpg",
//             "title" => "Portofolio Ketiga",
//             "name" => "Project Web Programming",
//             "subtitle" => "project-web-programming",
//             "description" => "Ad, excepturi earum. At delectus laboriosam possimus amet facere ullam quos veniam pariatur dicta itaque, ex veritatis vitae molestias ad unde porro nisi voluptate quod tenetur deserunt, minus commodi laudantium sed. Odit fugit dignissimos magni sed aliquid consequuntur eveniet, obcaecati ea veritatis ex dolorem harum, minus nostrum minima officia consequatur ipsam dolorum impedit qui."
//         ],
//         [
//             "image" => "grafis.jpg",
//             "title" => "Portofolio Keempat",
//             "name" => "Project Design Graphic",
//             "subtitle" => "project-design-graphic",
//             "description" => "Ad, excepturi earum. At delectus laboriosam possimus amet facere ullam quos veniam pariatur dicta itaque, ex veritatis vitae molestias ad unde porro nisi voluptate quod tenetur deserunt, minus commodi laudantium sed. Odit fugit dignissimos magni sed aliquid consequuntur eveniet, obcaecati ea veritatis ex dolorem harum, minus nostrum minima officia consequatur ipsam dolorum impedit qui."
//         ]
//     ];

//     $myportfolio = [];

//     foreach ($ports_post as $port){
//         if($port["subtitle"] === $subtitle){
//             $myportfolio = $port;
//         }
//     }

//     return view('port', [
//         "title" => "Description",
//         "port" => $myportfolio
//     ]);

//     return view('port', [
//         "title" => "Description",
//         "port" => Port::find($subtitle)
//     ]);

// });