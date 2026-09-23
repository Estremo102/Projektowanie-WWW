<?php 
    $active = isset($_GET['active']) ? $_GET['active'] : 1;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginacja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="flex-container">
        <header>
            <h1>
                <span class="blue">P</span><span class="yellow">a</span><span class="red">g</span><span class="green">i</span><span class="blue">n</span><span class="yellow">a</span><span class="red">c</span><span class="green">j</span><span class="blue">a</span>
            </h1>
        </header>
        <nav>
            <form action="">
                <input type="text">
            </form>
        </nav>
    </div>
    <main>
        <h2><span class="blue">S</span><span class="red">t</span><span class="yellow">r</span><span class="blue">o</span><span class="green">n</span><span class="red">a</span> <?php echo '<span class="yellow">'.$active.'</span>'; ?></h2>
        <div>
            <article>
                <h2><a href="#">Lorem</a></h2>
                <section>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quidem voluptates adipisci, eaque explicabo sequi, totam culpa voluptatum, officia iste blanditiis quos. Tempora quibusdam officiis odit eos in? Beatae, optio?</section>
            </article>
        </div>
        <div>
            <article>
                <h2><a href="#">Ipsum</a></h2>
                <section>Nobis saepe, fugit, exercitationem natus cupiditate doloribus veniam odit ipsam, quos sequi quas tempora repellendus obcaecati quod dolorum labore! Dicta doloremque magnam minima totam, veniam sapiente perspiciatis voluptatum hic corrupti!</section>
            </article>
        </div>
        <div>
            <article>
                <h2><a href="#">Dollor</a></h2>
                <section>Nisi natus doloribus consectetur dicta pariatur iusto quos delectus deleniti nostrum eaque quae, accusantium voluptatem quidem similique ratione dignissimos repudiandae reiciendis provident ipsum laudantium sed? Nihil cum minima repellendus illum?</section>
            </article>
        </div>
        <div>
            <article>
                <h2><a href="#">Sit</a></h2>
                <section>Corrupti neque autem molestias animi excepturi harum ad voluptates quibusdam sequi perferendis aliquid vero recusandae minus rem dolorum, debitis, totam blanditiis sit ut tenetur explicabo possimus? Repellendus tempore adipisci id!</section>
            </article>
        </div>
        <div>
            <article>
                <h2><a href="#">Amet</a></h2>
                <section>Atque, consectetur enim id distinctio possimus iste assumenda quibusdam impedit, vel hic suscipit ab reiciendis fugit esse. Ex omnis, aperiam eius enim, cum cupiditate tempore optio doloribus deleniti sapiente qui.</section>
            </article>
        </div>
        <div>
            <article>
                <h2><a href="#">Lorem</a></h2>
                <section>Quidem nesciunt temporibus adipisci recusandae sunt repellendus, iste facilis ex alias dolore eveniet eaque iusto, a ab consequuntur molestias delectus doloremque. Officia autem molestias labore! Explicabo cumque sunt nihil itaque.</section>
            </article>
        </div>
        <div>
            <article>
                <h2><a href="#">Ipsum</a></h2>
                <section>Distinctio eum excepturi officiis non laborum fuga alias deserunt, dolores unde, illo aspernatur neque magnam amet in maiores assumenda voluptatem earum eveniet reprehenderit repellat consequatur fugiat. Pariatur fugiat et rem.</section>
            </article>
        </div>
        <div>
            <article>
                <h2><a href="#">Dolor</a></h2>
                <section>Officiis, ex quasi non voluptate adipisci iste similique eligendi harum nostrum aspernatur ea illo unde quisquam nemo esse incidunt quia quae. Dignissimos omnis totam iure soluta possimus debitis velit vitae?</section>
            </article>
        </div>
        <div>
            <article>
                <h2><a href="#">Sit</a></h2>
                <section>Velit nisi dolor quasi doloremque reiciendis accusantium cupiditate porro autem aspernatur. Architecto hic doloremque velit, ipsum ratione quae, eaque incidunt non cum atque fuga corrupti ea dolor reprehenderit adipisci sequi!</section>
            </article>
        </div>
        <div>
            <article>
                <h2><a href="#">Amet</a></h2>
                <section>Debitis quaerat sapiente nulla repellendus deserunt. Perspiciatis officia, ullam corrupti veniam vel nam rem minus alias tempore pariatur molestias blanditiis, eaque, animi dignissimos quo voluptas aliquid id debitis nulla magnam.</section>
            </article>
        </div>
        <div>
            <table>
                <tbody>
                    <tr>
                        <td><a href="">&lt; Poprzednia</a></td>
                        <td><span class="blue">G</span></td>
                        <!-- <td><a href=""><span class="yellow">o</span><br><span class="underline">1</span></a></td>
                        <td class="active"><a href=""><span class="yellow">o</span><br><span class="underline">2</span></a></td>
                        <td><a href=""><span class="yellow">o</span><br><span class="underline">3</span></a></td>
                        <td><a href=""><span class="yellow">o</span><br><span class="underline">4</span></a></td>
                        <td><a href=""><span class="yellow">o</span><br><span class="underline">5</span></a></td>
                        <td><a href=""><span class="yellow">o</span><br><span class="underline">6</span></a></td>
                        <td><a href=""><span class="yellow">o</span><br><span class="underline">7</span></a></td>
                        <td><a href=""><span class="yellow">o</span><br><span class="underline">8</span></a></td>
                        <td><a href=""><span class="yellow">o</span><br><span class="underline">9</span></a></td>
                        <td><a href=""><span class="yellow">o</span><br><span class="underline">10</span></a></td> -->
                        <?php 
                        for ($i = 1; $i <= 10; $i++) {

                            echo '<td'. ($i==$active ? ' class="active"' : '').'><a href="?active='.$i.'"><span class="yellow">o</span><br><span class="underline">'. $i .'</span></a></td>';
                        }
                        ?>
                        <td><span class="blue">g</span><span class="green">l</span><span class="red">e</span></td>
                        <td><a href="">Następna &gt;</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>