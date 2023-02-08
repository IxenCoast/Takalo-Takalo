<body>
    <div class="Add">
        <H1 style="margin-left :50px;">Add  Product</H1>
        <hr>
    <form action="<?php echo base_url('index.php/demande/add');?>">
            
                <p style="margin-left :50px;"><input type="text" name="nom" placeholder="Enter name"></p>
                <p style="margin-left :50px;"><input type="text" name="title" placeholder="Enter title "></p>
                <p style="margin-left :50px;"><input type="text" name="prix" placeholder="Enter Price"></p> 
                <p style="margin-left :50px;">
                    <textarea  cols="30" rows="10" name="desc" placeholder="Enter description"></textarea>   
                <button type="submit" style="color: green; margin-left: 100px;">Ajouter <a href="#"></a></button>
            </div>
            
    </form>
    
</body>