@if(count($errors))
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            {{$error}}
        </div>
    @endforeach
@endif

@if($alert_toast = Session::get('alert_toast'))
    <div class="alert alert-{{$alert_toast['type']}} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        {{$alert_toast['title']}}</h4>
        {{$alert_toast['text']}}
    </div>
@endif