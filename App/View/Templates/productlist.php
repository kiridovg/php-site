<div class="container">
    <div class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">Список товаров</h2>
            <?php
            foreach ($params as $good){
                echo "<p class='id'>Номер: ${good['Id']}</p></br>";
                echo "<p class='name'>Название: ${good['Name']}</p></br>";
                echo "<p class='description'>Цена: ${good['Price']}</p></br>";
                echo "<p class='description'>Количество: ${good['Count']}</p></br>";

            }
            ?>

        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
</div>
