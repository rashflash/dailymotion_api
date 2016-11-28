# dailymotion_api
purpose of this Small PHP class is to use Dailymotion php SDK to fetch videos. You can create your own Video search engine which fetches videos from Dailymotion

# Usage
```
require_once 'DM_CLass.php';

$obj = new MyDM_API();
```

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

##  get Single Video Detail
```
$fields = array('id', 'title', 'owner', 'thumbnail_480_url', 'duration', 'embed_url', 'views_total', 'channel', 'language', 'description', 'bookmarks_total');
$video_detail=$obj->getVideo('x52v570', $fields);
```

## List of Related Videos
```
$fields = array('id', 'title','thumbnail_480_url');
$data_arr = array(
    'fields' => $fields,  
    'limit' => 6
);
$related_videos=$obj->getRelatedVideos('x52v570', $data_arr);
```
