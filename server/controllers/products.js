import Books from '../routes/books.js';

export function getAddProduct(req, res, next) {
    res.render('add-product', {
        pageTitle: 'add product', 
        path : '/admin/add-product'
        }); //change to sendfile if no template engine is working
}

export function postAddProduct(req, res, next) {
    const title = req.body.title;
    const content = req.body.content;
    const books = new Books(title, content);
    books
    .save()
    .then(() => {
        res.redirect('/');
    })
    .catch(err => {console.log(err)});
}

export function getShop(req, res, next) {
    Books.fetchAll()
    .then(([title]) => {
        res.render('shop', {
            pageTitle:"Items",
            prods : title,
            path :'/'  
        });
    })
    .catch(err => console.log(err));
}