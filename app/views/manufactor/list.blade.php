<table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>نام</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($factory as $item)
                                <tr>
                                    <td></td>
                                    <td>{{$item->name}}</td>
                                    <td><div class="btn-group"><a href="{{URL::route('editCar',['id'=>$item->id])}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o"></i></a><a href="{{URL::route('deleteCar', ['id'=>$item->id])}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a></div></td>
                                </tr>
                            @endforeach
                            <tfoot>
                                <tr>
                                    <td colspan="3">
                                        <div class="btn-group pull-left">
                                            <a href="{{URL::route('addFactory')}}" class="btn btn-info"><i class="fa fa-plus"></i> افزودن</a>
                                        </div>
                                        {{$factory->links()}}
                                    </td>
                                </tr>
                            </tfoot>
                        </table>