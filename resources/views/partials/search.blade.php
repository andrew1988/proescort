<section class="section-search">
  {!!Form::open()!!}
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
          Judet:{!! Form::select("city",['0'=>'Alege Judet']) !!}
        </div>
        <div class="col-md-2">
          Oras:{!! Form::select("city",['0'=>'Alege Oras']) !!}
        </div>
        <div class="col-md-2">
          Online:{!! Form::checkbox('1') !!}
        </div>
        <div class="col-md-2">
          Escorta sociala {!! Form::checkbox('1') !!}
        </div>
        <div class="col-md-2">
          Cu video {!! Form::checkbox('1') !!}
        </div>
    </div>
    {!! Form::close() !!}
</section>
