# dailymotion_api
purpose of this Small PHP class is to use Dailymotion php SDK to fetch videos.

# Usage
require_once 'DM_CLass.php';

$obj = new MyDM_API();

## To get list of videos based on search text
```
$fields = array('id', 'title','thumbnail_480_url');
$search_text = "USA elections 2016";
$data_arr = array(
    'fields' => $fields,
    'search' => $search_text,    
    'sort' => 'relevance',
    'page' => 1,
    'limit' => 3
);
$list=$obj->getVideoList($data_arr);
```

Now $fields are the parameters you want with each video, search means the 'text', $limit referes to numbers of videos to be matched.
