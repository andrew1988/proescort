<section class="section-search">
  <div class="container">
  {!!Form::open()!!}
    <div class="row">
        <div class="col-md-2">
          Judet
          {!! Form::select("city",['0'=>'Alege Judete de intalnire'],null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-2">
          Oras
          {!! Form::select("city",['0'=>'Alege Oras'],null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-2">
          Online {!! Form::checkbox('online',1,null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-2">
          Escorta sociala {!! Form::checkbox('social',1,null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-2">
          Cu video {!! Form::checkbox('video',1,null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::submit('Cauta') !!}
        </div>
    </div>
    {!! Form::close() !!}
  </div>
</section>
