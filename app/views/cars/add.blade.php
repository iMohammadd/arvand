{{Form::open()}}
{{Form::label('name','نام خودرو')}}
{{Form::text('name',null,['class'=>'form-control'])}}
{{Form::label('factory','کارخانه تولید کننده')}}
{{Form::select('factory', Factory::lists('name', 'id'),null,['class'=>'form-control'])}}
{{Form::label('price','قیمت')}}
{{Form::text('price',null,['class'=>'form-control'])}}
{{Form::label('info','توضیحات')}}
{{Form::text('info',null,['class'=>'form-control'])}}
{{Form::submit('ذخیره',['class'=>'form-control btn btn-info'])}}
{{Form::close()}}