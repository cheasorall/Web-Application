<html>
    <header> 
        <title>
            display courses
        </title>
        <h1>
            display courses
        </h1>
    <header>

    <body>
        <table>
            <thead>
                <th>No.</th>
                <th>Course Name</th>
            </thead>

            <tbody>
                @for($i=1; $i<=DB::table('courses')->count(); $i++)
                <tr>
                    <?php $result = DB::table('courses')->where('course_id','=',$i)->get() ?>
                    <td>{{ $result[0]->course_id}}</td>
                    <td>{{ $result[0]->course_name}}</td>
                </tr>
                @endfor
            </tbody>
        </table>
    </body>
</html>