# Changes for Order System in relation to adding archive

## Database related
- SQL queries for order
    ```SELECT * FROM ORDERS ORDERBY DATE WHERE``` 

## Codebase
- added `archive.php`
- TO ADD
    - logic for pushing cancelled orders to archive
- To test
    - Automatic delete of archived orders after 5mins

## Testing
- Regression Testing
    - When main logic is added, test for bugs
    - White box test included
    - For Enzo and Joey
        - JOEY PLS TEST FOR ME, BECAUSE I CANT RUN THE FILES THEMSELVES