@extends('Layout.default')
@section('content')
    <div id="property">
        <table>
            <tr>
                <td>Name</td>
                <td>Address</td>
                <td>City</td>
                <td>State</td>
                <td>Zip</td>
                <td>Cell</td>
                <td></td>
            </tr>
            <?php
                foreach ($properties as $singleProperty) :
                    echo '<tr>';
                        echo '<td>'. $singleProperty['name'] .'</td>';
                        echo '<td>'. $singleProperty['address'] .'</td>';
                        echo '<td>'. $singleProperty['city'] .'</td>';
                        echo '<td>'. $singleProperty['state'] .'</td>';
                        echo '<td>'. $singleProperty['zip'] .'</td>';
                        echo '<td>'. $singleProperty['cell'] .'</td>';
                        echo '<td><a href="'.URL::to('property/edit',$singleProperty['id']).'">edit</a></td>';
                    echo '</tr>';
                endforeach;
            ?>
        </table>
        <div class="paginator">
            {{ $properties->links() }}
        </div>
    </div>
@stop