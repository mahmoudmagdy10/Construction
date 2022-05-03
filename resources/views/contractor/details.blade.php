@extends('contractor.layout.app')

@section('link')
    <link rel="stylesheet" href="{{asset('css/customer/details.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?display=swap&amp;family=Libre+Baskerville:400,700|Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">    <link rel="stylesheet" href="css/project.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

@endsection

@section('content')

@endsection
<div class="title">
    <div data-aos="fade-up" data-aos-delay="150" class="container">
    @isset($contractor)
        @foreach($props as $prop)
        <div class="projects">
                <div data-aos="fade-up" data-aos-delay="150" class="card">
                    <div class="box">
                        <div class="det">
                            <img src="{{asset('image-home/house2.jpg')}}" alt="" />
                            <ul>
                                <a href=""><h3>House</h3></a>
                            </ul>
                        </div>
                    </div>
                </div>

        </div>
        <div class="table">
            <table>
            <tr>
                <th>#</th>
                <th>Properity</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>1</td>
                <td>PREDICTION</td>
                <td>{{$prop->PREDICTION}}</td>
            </tr>
            <tr>
                <td>2</td>
                <td>OverallQual</td>
                <td>{{$prop->OverallQual}}</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Neighborhood</td>
                <td>{{$prop->Neighborhood}}</td>
            </tr>
            <tr>
                <td>4</td>
                <td>GrLivArea</td>
                <td>{{$prop->GrLivArea}}</td>
            </tr>
            <tr>
                <td>5</td>
                <td>GarageCars</td>
                <td>{{$prop->GarageCars}}</td>
            </tr>
            <tr>
                <td>6</td>
                <td>BsmtQual</td>
                <td>{{$prop->BsmtQual}}</td>
            </tr>
            <tr>
                <td>7</td>
                <td>ExterQual</td>
                <td>{{$prop->ExterQual}}</td>
            </tr>
            <tr>
                <td>8</td>
                <td>GarageArea</td>
                <td>{{$prop->GarageArea}}</td>
            </tr>
            <tr>
                <td>9</td>
                <td>KitchenQual</td>
                <td>{{$prop->KitchenQual}}</td>
            </tr>
            <tr>
                <td>10</td>
                <td>OverallQual</td>
                <td>{{$prop->OverallQual}}</td>
            </tr>
            <tr>
                <td>11</td>
                <td>YearBuilt</td>
                <td>{{$prop->YearBuilt}}</td>
            </tr>
            <tr>
                <td>12</td>
                <td>TotalBsmtSF</td>
                <td>{{$prop->TotalBsmtSF}}</td>
            </tr>
            </table>
            <table class="continue">
            <tr>
                <td>13</td>
                <td>FirstFlrSF</td>
                <td>{{$prop->FirstFlrSF}}</td>
            </tr>
            <tr>
                <td>14</td>
                <td>GarageFinish</td>
                <td>{{$prop->GarageFinish}}</td>
            </tr>
            <tr>
                <td>15</td>
                <td>FullBath</td>
                <td>{{$prop->FullBath}}</td>
            </tr>
            <tr>
                <td>16</td>
                <td>YearRemodAdd</td>
                <td>{{$prop->YearRemodAdd}}</td>
            </tr>
            <tr>
                <td>17</td>
                <td>GarageType</td>
                <td>{{$prop->GarageType}}</td>
            </tr>
            <tr>
                <td>18</td>
                <td>FireplaceQu</td>
                <td>{{$prop->FireplaceQu}}</td>
            </tr>
            <tr>
                <td>19</td>
                <td>Foundation</td>
                <td>{{$prop->Foundation}}</td>
            </tr>
            <tr>
                <td>20</td>
                <td>MSSubClass</td>
                <td>{{$prop->MSSubClass}}</td>
            </tr>
            <tr>
                <td>21</td>
                <td>TotRmsAbvGrd</td>
                <td>{{$prop->TotRmsAbvGrd}}</td>
            </tr>
            <tr>
                <td>22</td>
                <td>Fireplaces</td>
                <td>{{$prop->Fireplaces}}</td>
            </tr>
            <tr>
                <td>23</td>
                <td>Created At</td>
                <td>{{$prop->created_at}}</td>
            </tr>


            </table>
        </div>
        @endforeach
    @endisset
    </div>
</div>
<!-- end restaurant   -->
<section class="gradient-custom commment">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card main">
          <div class="card-body p-4">
            <!-- Successfully msg -->
            <div id="success" class="alert alert-success" style="display: none">
                Added Successfuly
            </div>

            <h3 class="text-center mb-4 pb-2 h_3"> Project's Comments</h3>
            <a href="#!"><i class="fas fa-reply fa-xs"></i><span class="small reply"> Add</span></a>

            @isset($comments)

            <div class="row parent">
              <div class="col">
                <div class="d-flex flex-start">
                  <img class="nested_comment rounded-circle shadow-1-strong me-3"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar" width="65"
                    height="65" />
                  <div class="flex-grow-1 flex-shrink-1">
                    @foreach($comments as $comment)
                    <div>
                      <div class="d-flex justify-content-between align-items-center">
                        <b class="mb-0">
                          {{$contractor->name}}
                          <span class="small time"> 2 hours ago</span>
                        </b>
                      </div>
                      <p class="small mb-0">
                        {{$comment->content}}
                      </p>
                    </div>
                    @endforeach
                    @foreach($replies as $reply)
                    <div class="d-flex flex-start mt-4">
                      <a class="me-3" href="#">
                        <img class="nested_comment rounded-circle shadow-1-strong"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
                          width="65" height="65" />
                      </a>
                      <div class="flex-grow-1 flex-shrink-1">
                        <div>
                          <div class="d-flex justify-content-between align-items-center">
                            <b class="mb-1">
                              {{$contractor->name}} <span class="small time"> 4 hours ago</span>
                            </b>
                          </div>
                          <p class="small mb-0">
                          {{$reply->content}}
                          </p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            @endisset

            @isset($project)
            @foreach($project as $pro)
            <!-- Add Comment -->
            <form id="form_id" action="{{route('contractor.comment',$pro->id)}}" method="POST">
                @csrf
                <div class="form-group add">
                    <label for="exampleInputEmail1">Add Comment</label>
                    <textarea name ="comment" class="form-control" aria-label="With textarea"></textarea>
                    <input id="add_comment" class="submit btn btn-primary" type="submit" value="Send">
                </div>
            </form>
            <!-- Add Comment -->
            @endforeach
            @endisset
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ####################### -->
<!-- <section style="background-color: #ad655f;">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10">
        <div class="card text-dark">
          <div class="card-body p-4">
            <h4 class="mb-0">Recent comments</h4>
            <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>

            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">Maggie Marsh</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                    March 07, 2021
                    <span class="badge bg-primary">Pending</span>
                  </p>
                  <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                </div>
                <p class="mb-0">
                  Lorem Ipsum is simply dummy text of the printing and typesetting
                  industry. Lorem Ipsum has been the industry's standard dummy text ever
                  since the 1500s, when an unknown printer took a galley of type and
                  scrambled it.
                </p>
              </div>
            </div>
          </div>

          <hr class="my-0" />

          <div class="card-body p-4">
            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(26).webp" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">Lara Stewart</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                    March 15, 2021
                    <span class="badge bg-success">Approved</span>
                  </p>
                  <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                  <a href="#!" class="text-success"><i class="fas fa-redo-alt ms-2"></i></a>
                  <a href="#!" class="link-danger"><i class="fas fa-heart ms-2"></i></a>
                </div>
                <p class="mb-0">
                  Contrary to popular belief, Lorem Ipsum is not simply random text. It
                  has roots in a piece of classical Latin literature from 45 BC, making it
                  over 2000 years old. Richard McClintock, a Latin professor at
                  Hampden-Sydney College in Virginia, looked up one of the more obscure
                  Latin words, consectetur, from a Lorem Ipsum passage, and going through
                  the cites.
                </p>
              </div>
            </div>
          </div>

          <hr class="my-0" style="height: 1px;" />

          <div class="card-body p-4">
            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(33).webp" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">Alexa Bennett</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                    March 24, 2021
                    <span class="badge bg-danger">Rejected</span>
                  </p>
                  <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                </div>
                <p class="mb-0">
                  There are many variations of passages of Lorem Ipsum available, but the
                  majority have suffered alteration in some form, by injected humour, or
                  randomised words which don't look even slightly believable. If you are
                  going to use a passage of Lorem Ipsum, you need to be sure.
                </p>
              </div>
            </div>
          </div>

          <hr class="my-0" />

          <div class="card-body p-4">
            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(24).webp" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">Betty Walker</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                    March 30, 2021
                    <span class="badge bg-primary">Pending</span>
                  </p>
                  <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                </div>
                <p class="mb-0">
                  It uses a dictionary of over 200 Latin words, combined with a handful of
                  model sentence structures, to generate Lorem Ipsum which looks
                  reasonable. The generated Lorem Ipsum is therefore always free from
                  repetition, injected humour, or non-characteristic words etc.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- start contract  -->
<div class="maincontract">
    <div class="container">
    <div class="cont-det">
        <h2>contract</h2>
        <div class="con-sign">
        <p>Let's write the contract</p>
        <a href="#">sign</a>
        </div>
    </div>

    </div>
</div>
<!-- end contract  -->
<div class="payement">
    <div class="container">
    <div class="pay">
        <h3>go to the payment </h3>
        <a href="#">payment</a>
    </div>
    </div>
</div>

@section('script')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
    duration: 550,
    });
</script>
<script src=" {{asset('js/comment/reply.js')}}"></script>
<script src="node_modules/@fortawesome/fontawesome-free/js/all.js" charset="utf-8"></script>

@endsection