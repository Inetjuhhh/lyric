// const searchForm = document.getElementById('searchForm');
// const queryInput = document.getElementById('queryInput');
const apiKey = '78f0c98dc4mshf91bd8f40eb69c8p16578fjsn0b2ec7688c2a';

function doApiSearch(query) {
    fetch(`https://genius-song-lyrics1.p.rapidapi.com/search/?q=${query}&rapidapi-key=${apiKey}`)
        .then(response => response.json())
        .then(data => {
            let result = data;
            let hits = result.hits;
            let ulSongList = "<table class='w-full text-sm text-left text-gray-500 dark:text-gray-400'><thead class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'><tr><th class='p-6'>Song</th><th>Add to my Lyric list</th></tr></thead><tbody>";
            hits.forEach(function (hit) {
                //haalt de volledige titel op van de liedjes die gezocht worden.
                let lyricSong = hit.result['full_title'];
                console.log(lyricSong);
                let song = "<tr><td>" + lyricSong + "</td><td><button class='p-6 bg-gray-200 border-gray-400 rounded-lg'>+</button></td></tr>";
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
// <script>
//     lyricSong.forEach(function (song)
//     {
//         document.write( "<ul>" +
//             "<li>" + song + "</li>" +
//             "</ul>");
//     });
// </script>
// });
