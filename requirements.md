## Make a web application that allows you to login and search for hotels by consulting our APIs.

### Requirements:

1. Login Form with fields:
    * Airline: List\<String\> - https://beta.id90travel.com/airlines Method: GET
    * Username: \<String\>
    * Password: \<String\>

2. Auth login: https://beta.id90travel.com/session Method: POST

#### Example request login:

```json
{
  "airline": "F9",
  "username": "f9user",
  "password": "123456",
  "remember_me": "1"
}
```

3. Hotel search form: - https://beta.id90travel.com/api/v1/hotels Method: GET
    * Destiny: \<String\>
    * Date range \<Date\>
    * Number of guests \<Integer\> (between 1 and 4)

#### Example query params request:

```shell
guests[]:2
checkin:2020-10-24
checkout:2020-10-25
destination:Cancun
keyword:
rooms:1
longitude:
latitude:
sort_criteria:Overall
sort_order:desc
per_page:25
page:1
currency:USD
price_low:
price_high:
```

4. Search results page: screen that shows a list with the search results.