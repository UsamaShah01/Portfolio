<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Case Study</title>
  </head>
  <body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12"> <Center><h1>ADMIN PANEL</h1></Center> </div>
        </div>

        <div class="row">
         <div class="col-md-2">
            <div class="list-group">
             <a href="/dashboard" class="list-group-item list-group-item-action active" aria-current="true">
                Dasboard
            </a>
            <a href="{{url('/case/study')}}" class="list-group-item list-group-item-action " aria-current="true">
                Case Study
            </a>
            <a href="{{url('/project')}}" class="list-group-item list-group-item-action">Portfolio</a>

            <form method="POST" action="{{ route('logout') }}">
                            @csrf
             <a href="route('logout')" class="btn btn-block btn-danger" >Log out</a>
             </form>
        </div>
        </div>

        <div class="col-md-8">


              <form action="{{route('storecasestudy')}}" method="POST" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
                       <div class="alert alert-danger">
                     <ul>
                  @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                  @endforeach
                     </ul>
                          </div>
                      @endif
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           
            </div>
    
            <div class="mb-3" >
            <label for="exampleFormControlTextarea1" class="form-label">Content</label>
            <textarea id="editor" name="content" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>

            <div>
            <label for="formFileLg" class="form-label">Upload Image</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="image">
            </div>
        
                 <br>
            <div>
            <label for="formFileLg" class="form-label">Upload PDF</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file" name="pdf">
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
            <table class="table">
            <thead class="table-dark">
            <tr>
                <th scope="row">SR</th>
                <td>Title</td>
                <td>Image</td>
                <td>PDF</td>
                <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($casestudys as $casestudy)
            <tr>
                <th scope="row">{{$casestudy->id}}</th>
                <td>{{$casestudy->title}}</td>
                <td>{{$casestudy->image}}</td>
                <td>{{$casestudy->Pdf}}</td>
                <td><a href="/delete/store/case/study/{{$casestudy->id}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
            </div>


            
       
        </div>
      
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>