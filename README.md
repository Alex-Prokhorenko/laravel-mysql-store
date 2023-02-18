# Laravel Fake Strore API
____
This project is for developing and testing frontend applications.  
A server developed with the Laravel framework accepts HTTP requests and returns a json object as a response.  
When sending the requests described in Methods section, no changes are made to the database.  
But, I connected Admin Lte to the project. It implements the ability to interact with the database using forms.  
The panel displays a list of product cards. Each card can be viewed, edited or deleted.  
Also project contains migrations and seeders for creating and filling database.
## Methods:
____

Get all products

### Method: GET  
`http://fakestoreapi.ru/products`

### Get all products with options
Method: GET  

Limit number of products on current page  
`http://laravel.store/public/products/?per_page=2`  
You can also choose the page to display  
`http://laravel.store/public/products/?per_page=2&page=2`


### Get a single product

Method GET

Put the product number at the end of the line  
`https://fakestoreapi.ru/products/id`

### Create new product

Method POST  
`http://fakestoreapi.ru/products`  
Send an object
```
{
    'title' => 'test',
    'price' => '10',
    'category_id' => '1',
    'description' => 'randomwords',
    'image' => 'https://randomaddress/image',
}
```
will response
```
{
    'title' => 'test',
    'price' => '10',
    'category_id' => '1',
    'description' => 'randomwords',
    'image' => 'https://randomaddress/image',
}
```

### Update a product

Method PATCH  
`http://laravel.store/public/products/1`  
Send an object to the address with id of the product being changed
```
{
    'title' => 'test',
    'price' => '10',
    'category_id' => '1',
    'description' => 'randomwords',
    'image' => 'https://randomaddress/image',
}
```
will response
```
{
    'title' => 'test',
    'price' => '10',
    'category_id' => '1',
    'description' => 'randomwords',
    'image' => 'https://randomaddress/image',
}
```


### Delete a product

Method DELETE  
`https://fakestoreapi.ru/products/{id}`  
Put the product number at the end of the line
