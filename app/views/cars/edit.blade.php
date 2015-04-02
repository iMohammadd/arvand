{{Form::open()}}
{{Form::label('name','نام خودرو')}}
{{Form::text('name',$car->name,['class'=>'form-control'])}}
{{Form::label('factory','کارخانه تولید کننده')}}
{{Form::select('factory', Factory::lists('name', 'id'),$car->factory_id,['class'=>'form-control'])}}
{{Form::label('price','قیمت')}}
{{Form::text('price',$car->price,['class'=>'form-control'])}}
{{Form::label('info','توضیحات')}}
{{Form::text('info',$car->info,['class'=>'form-control'])}}
{{Form::submit('ذخیره',['class'=>'form-control btn btn-info'])}}
{{Form::close()}}