<?php
//   trait Shareable
//   {
//     function share()
//     {
//       echo "Share this item";
//     }
//   }
//
//   class Post {
//     use Shareable;
//   }
//
//   class Comment {
//     use Shareable;
//   }
//
// $post = new Post;
// $post->share();

//  ............
// Interface
interface Sociable {

  public function like();
  public function share();

}

// Trait
trait Sharable {
  public function share()
  {

  }

  public function like()
  {
    //
  }
}

// Class
class Post implements Sociable {

  use Sharable;
}

$post = new Post;
