<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    /*.inputBox {*/
    /*    display: flex;*/
    /*    flex-wrap: wrap;*/
    /*    justify-content: space-around;*/
    /*}*/
    /*.inputBox .input {*/
    /*    width: 30%;*/
    /*    margin-bottom: 10px;*/
    /*}*/
    /*.inputBox .input label {*/
    /*    display: block;*/
    /*    padding: .5rem 0;*/
    /*    font-size: 1rem;*/
    /*    color: var(--light-color);*/
    /*}*/

    /*.inputBox .input input,*/
    /*.inputBox .input textarea {*/
    /*    background: #eee;*/
    /*    border-radius: .5rem;*/
    /*    padding: 1rem;*/
    /*    font-size: 1rem;*/
    /*    color: var(--black);*/
    /*    text-transform: none;*/
    /*    margin-bottom: 1rem;*/
    /*    width: 100%;*/
    /*}*/
    /*.inputBox {*/
    /*    display: flex;*/
    /*    flex-wrap: wrap;*/
    /*    justify-content: space-around;*/
    /*}*/
    /*.inputBox .input {*/
    /*    width: 30%;*/
    /*    margin-bottom: 10px;*/
    /*}*/
    /*.inputBox .input label {*/
    /*    display: block;*/
    /*    padding: .5rem 0;*/
    /*    font-size: 1rem;*/
    /*    color: var(--light-color);*/
    /*}*/

    /*.inputBox .input input,*/
    /*.inputBox .input textarea {*/
    /*    background: #eee;*/
    /*    border-radius: .5rem;*/
    /*    padding: 1rem;*/
    /*    font-size: 1rem;*/
    /*    color: var(--black);*/
    /*    text-transform: none;*/
    /*    margin-bottom: 1rem;*/
    /*    width: 100%;*/
    /*}*/
    /*form {*/
    /*    border: 3px solid #f1f1f1;*/
    /*    padding:2rem 5%;*/
    /*}*/
    /*input{*/
    /*         width: 100%;*/
    /*         padding: 12px 20px;*/
    /*         margin: 8px 0;*/
    /*         display: inline-block;*/
    /*         border: 1px solid #ccc;*/
    /*         box-sizing: border-box;*/
    /*     }*/

   input {
        /*background-color: #04AA6D;*/
        color: white;
        padding: 10px 10px;
        /*margin: 1px 200px;*/
        border-radius: 5px;
        cursor: pointer;
        border: 1px solid #1a202c;
        width: 100%;
   }
    .input {
        margin-top: 12px;
    }



    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .submit{
            width: 100%;
        }
    }
    #create{
        background-color: #2BD47D;
        width: 80px;
        height: 30px;
        line-height: 30px;
        /*position: absolute;*/
        right: 2%;
        top: 10%;
        float: right;
        margin: 10px 65px;
        border-radius: 5px;
        text-align: center;
        color: #fff;
    }
    #remove{
        /*position: relative;*/
        background-color:#dc3545;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 5px;
        text-align: center;
        color: #fff;
    }
    #update{
        background-color:#2563eb;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 5px;
        text-align: center;
        color: #fff;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border-top: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    /*tr:nth-child(even) {*/
    /*    background-color: #dddddd;*/
    /*}*/
</style>
