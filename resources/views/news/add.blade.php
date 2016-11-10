<html>
    <head>
        <title>Добави новина</title>
    </head>
    <body>
        <form method="POST">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <div>
                <input type="text" name="title" placeholder="Заглавие" />
            </div>
            <div>
                <textarea name="content" placeholder="Съдържание" ></textarea>
            </div>    
            <div>
                <input type="text" name="category" placeholder="Категория" />
            </div>
            <div>
                <input type="submit" text="Добави" />
            </div>
        </form>
    </body>
</html>
