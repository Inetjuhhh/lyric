function doApiSearch(query) {
    let api_route = document.querySelector('[name="my_api_route"]').content;
    let add_lyric = document.querySelector('[name="add_lyric"]').content;
    let csrf_token = document.querySelector('[name="csrf_token"]').content;
    console.log(api_route);
    fetch(`${api_route}?q=${query}`)
        .then(response => response.json())
        .then(data => {
            let result = data;
            let hits = result.hits;
            let ulSongList =
                "<table class='w-full text-sm text-left text-gray-500 dark:text-gray-400'>" +
                    "<thead class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>" +
                        "<tr>" +
                            "<th class='p-6'>Song</th>" +
                            "<th>Add to my Lyric list</th>" +
                        "</tr>" +
                    "</thead>" +
                    "<tbody class='[&>*:nth-child(even)]:text-blue-600 [&>*:nth-child(even)]:font-bold '>";
            hits.forEach(function (hit) {
                //haalt de volledige titel op van de liedjes die gezocht worden.
                let lyricSong = hit.result['full_title'];
                console.log(lyricSong);
                let song =
                    "<tr class='[&>*:nth-child(even)]:text-blue-600 [&>*:nth-child(even)]:font-bold '>" +
                        "<td>" + lyricSong + "</td>" +
                        "<td class='p-6 text-blue-500 bg-gray-200 border-gray-400 rounded-lg' >" +
                            "<form action='" + add_lyric  + "' method='post' >" +
                                "<input type='hidden' name='_token' value='" + csrf_token + "'>" +
                                "<input type='hidden' name='user_id' value=''>" +
                                "<input type='hidden' name='full_title' value='" + lyricSong + "'>" +
                                "<input type='hidden' name='lyrics' value=''>" +
                                "<input type='submit' value='Add to my lyrics' class='text-blue-500' >" +
                            "</form>" +
                        "</td>" +
                    "</tr>";
                ulSongList += song;
            });
            ulSongList += "</tbody></table>";
            document.getElementById('song').innerHTML = ulSongList;
        })
        .catch(error => {
            // Handle any errors
            console.error(error);
        });
}
