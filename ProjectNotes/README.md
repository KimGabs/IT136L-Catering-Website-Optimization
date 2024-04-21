# Changes for Order System in relation to adding archive

## Database related
- SQL queries for order
```
Old show order sql query:
"SELECT * FROM orders ORDER BY orderDate DESC LIMIT $start_index, $results_per_page";
```
```
New query for show orders:
"SELECT * FROM orders WHERE orderStatus != 'cancelled' ORDER BY orderDate DESC LIMIT $start_index, $results_per_page";
```
```
Query for show orders in archives:
“SELECT * FROM orders WHERE orderStatus = 'cancelled' ORDER BY orderDate DESC LIMIT $start_index, $results_per_page"
```
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