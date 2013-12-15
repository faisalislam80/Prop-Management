@extends('Layout.default')
@section('content')
    <div id="property">
        <table class="table table-striped">
            <thead>
            <tr class="info">
                <td>Name</td>
                <td>Address</td>
                <td>City</td>
                <td>State</td>
                <td>Zip</td>
                <td>Cell</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach ($properties as $singleProperty) :
                    echo '<tr>';
                        echo '<td>'. $singleProperty['name'] .'</td>';
                        echo '<td>'. $singleProperty['address'] .'</td>';
                        echo '<td>'. $singleProperty['city'] .'</td>';
                        echo '<td>'. $singleProperty['state'] .'</td>';
                        echo '<td>'. $singleProperty['zip'] .'</td>';
                        echo '<td>'. $singleProperty['cell'] .'</td>';
                        echo '<td><a class="btn btn-link" href="'.URL::to('property/edit',$singleProperty['id']).'"><i class="icon-pencil-4"></i></a></td>';
                    echo '</tr>';
                endforeach;
            ?>
            </tbody>
        </table>
        <div class="paginator">
            {{ $properties->links() }}
        </div>
    </div>
@stop