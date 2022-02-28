<div class="container">
    <h1>Cars</h1>
    <table class="table">
        <tbody>
            <?php foreach($auto as $car):?>
            <tr>
                <td><?=$car->id?></td>
                <td><?=$car->marka?></td>
                <td><?=$car->year?></td>
                <td><?=$car->color?></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>