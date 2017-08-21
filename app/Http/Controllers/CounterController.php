<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Initiate variable
        // $base_value = [5, 8, 7, 9, 10, 2, 4, 5, 9, 6];
        // $base_value = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
        $base_value = [10, 5, 1, 10, 10, 10, 1, 1, 10, 10];

        // build matrix
        $base_matrix = $this -> build_matrix( $base_value );

        // deffuzzyfication matrix into matrix number
        $base_fuzzy = $this -> build_deffuzy( $base_matrix );

        // build supermatrix from deffuzzyfication
        $base_supermatrix = $this -> build_supermatrix( $base_fuzzy );

        // build supermatrix from deffuzzyfication
        $base_limit = $this -> build_supermatrix( $base_supermatrix );

        // calculate eigenvector
        $base_eigenvector = $this -> build_eigenvector( $base_limit );

        // calculate overall weighted criteria W21 (priorities) * W22 (interdepedence)
        $base_overall = $this -> build_overall ( $base_eigenvector );

        // generate topsis matrix
        $topsis_matrix = $this -> build_topsis_matrix ( $base_value );

        // generate topsis matrix
        $topsis_square = $this -> build_topsis_square ( $topsis_matrix );

        // build mean topsis
        $topsis_mean = $this -> build_mean_topsis ( $topsis_square );

        // generate normalized topsis matrix
        $topsis_normalized = $this -> build_normalized_topsis ( $topsis_matrix, $topsis_mean );

        // generate weighted normalized topsis matrix
        $topsis_weighted = $this -> build_weighted_topsis ( $topsis_normalized, $base_overall );

        // generate min and max topsis
        $topsis_minmax = $this -> build_minmax_topsis ( $topsis_weighted );

        // generate ideal positive and negative topsis
        $topsis_ideal = $this -> build_ideal_topsis ( $topsis_weighted, $topsis_minmax );

        // generate ranking
        $topsis_rank = $this -> build_rank_topsis ( $topsis_ideal );

        // Data Testing
        // var_dump($base_matrix);
        // var_dump($base_fuzzy);
        // var_dump($base_supermatrix);
        var_dump($base_eigenvector);
        // var_dump($base_overall);
        // var_dump($topsis_matrix);
        // var_dump($topsis_square);
        // var_dump($topsis_mean);
        // var_dump($topsis_normalized);
        // var_dump($topsis_weighted);
        // var_dump($topsis_minmax);
        // var_dump($topsis_ideal);
        // var_dump($topsis_rank);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Test show message

        return 'Hi This is Show Methods';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
    * Show test view using test.blade.php
    *
    * @param  string  $name
    * @return \Illuminate\Http\Response
    */
    public function show_test ($name, $password) {
        
        return view('test', compact('name', 'password'));

    }

    /**
    * Build matrix from array
    *
    * @param  array  $value
    * @return array $matrix
    */

    public function build_matrix( $value = [] ) {

        //  Initialize variabel
        $column = 10;
        $row = 10;
        $elements = 3;
            
        //  Initialize matrix
        $matrix = array();

        // Initialize base matrix
        // Loop the rows in matrix
        for ( $loop_row = 0; $loop_row < $row;  $loop_row++ ) {

            // loop column in matrix
            for ( $loop_column = 0; $loop_column < $column;  $loop_column++ ) {

                // loop the elements in matrix
                for ( $loop_ele = 0; $loop_ele < $elements; $loop_ele++ ) {

                    // get variable difference
                    $result = $value[ $loop_row ] - $value[ $loop_column ];

                    if ( $loop_row === $loop_column || $result == 0 )
                        $matrix[$loop_column][$loop_row][$loop_ele] = 1;

                    else if ( $loop_row < $loop_column ) {

                        // negative
                        if ( $result < 0 ) {

                            $result = abs($result);

                            if ( $loop_ele == 0 ) {

                                $min = $result + 2;
                                $matrix_number = ( $min > 9 ) ? 9 : $min; 
                            }

                            else if ( $loop_ele == 1 )
                                $matrix_number = $result;
                                
                            else if ( $loop_ele == 2 ) {

                                $max = $result - 2;
                                $matrix_number = ( $max < 1 ) ? 1 : $max;
                            }

                            $matrix[$loop_column][$loop_row][$loop_ele] = 1 / $matrix_number;

                        } 
                        
                        // positive
                        else {

                            if ( $loop_ele == 0 ) {

                                $min = $result - 2; 
                                $matrix_number = ($min < 1 ) ? 1 : $min;
                            
                            }

                            else if ( $loop_ele == 1 )
                                $matrix_number = $result;

                            else if ( $loop_ele == 2 ) {

                                $max = $result + 2;
                                $matrix_number = ($max > 9 ) ? 9 : $max;
                            
                            }

                            $matrix[$loop_column][$loop_row][$loop_ele] = $matrix_number;

                        }

                    }

                    // inverse
                    else {

                        if ( $loop_ele == 0 )
                            $matrix_number = 1 / $matrix[$loop_row][$loop_column][2]; 

                        else if ( $loop_ele == 1 )
                            $matrix_number = 1 / $matrix[$loop_row][$loop_column][1];

                        else if ( $loop_ele == 2 )
                            $matrix_number = 1 / $matrix[$loop_row][$loop_column][0];

                        $matrix[$loop_column][$loop_row][$loop_ele] = $matrix_number;

                    }
                        

                }

            }

        }

        return $matrix;

    }

    
    /**
    * Defuzzyfication from fuzzy matrix to normal matrix
    *
    * @param  array  $matrix
    * @return array $super_matrix
    */
    public function build_deffuzy ( $matrix = [] ) {

        //  Initialize variabel
        $column = 10;
        $row = 10;
        $elements = 3;
            
        //  Initialize matrix
        $super_matrix = array();

        // Initialize base matrix
        // Loop the rows in matrix
        for ( $loop_row = 0; $loop_row < $row;  $loop_row++ ) {

            // loop column in matrix
            for ( $loop_column = 0; $loop_column < $column;  $loop_column++ ) {

                $low = $matrix[$loop_row][$loop_column][0];
                $medium = $matrix[$loop_row][$loop_column][1];
                $upper = $matrix[$loop_row][$loop_column][2];

                // deffuzzyfication
                $de_low = ($medium-$low) * 0.5 + $low ;
                $de_upper = $upper - ($upper-$medium) * 0.5;

                $super_matrix[$loop_row][$loop_column] = ( 0.5 * $de_low ) + ( 0.5 * $de_upper ) ;

            }

        }

        return $super_matrix;

    }

    /**
    * Build supermatrix from normal matrix
    *
    * @param  array  $matrix
    * @return array $super_matrix
    */
    public function build_supermatrix ( $matrix = [] ) {

        //  Initialize variabel
        $column = 10;
        $row = 10;
        $result = 0;

        //  Initialize matrix
        $super_matrix = array();

        // Initialize base matrix
        // Loop the rows in matrix
        for ( $loop_column = 0; $loop_column < $column;  $loop_column++ ) {

            // loop column in matrix
            for ( $loop_row = 0; $loop_row < $row;  $loop_row++ ) {

                for ( $count_matrix = 0; $count_matrix < $column; $count_matrix++ ) {

                    $result = $result + (  $matrix[ $loop_column ][ $count_matrix ] * $matrix[ $count_matrix ][ $loop_row ]  );

                }

                // store supermatrix to array
                $super_matrix[$loop_column][$loop_row] = $result;
                
                // clear result
                $result = 0;
            }

        }

        return $super_matrix;
    
    }


    /**
    * Build eigenvector from supermatrix
    *
    * @param  array  $matrix
    * @return array $eigenvector
    */

    public function build_eigenvector ( $matrix = array() ) {

        //  Initialize variabel
        $column = 10;
        $row = 10;
        $result = 0;

        //  Initialize matrix
        $eigevector = array();

        // temporary store
        $temp_total = array();
        $temp_sum = 0;
        $total_eigen = 0;

        // Initialize base matrix
        // Loop the rows in matrix
        for ( $loop_column = 0; $loop_column < $column;  $loop_column++ ) {

            // loop column in matrix
            for ( $loop_row = 0; $loop_row < $row;  $loop_row++ ) {

                // sumarize total
                $result = $matrix[ $loop_row ][ $loop_column ] + $result;

            }

            // store calculation
            $temp_total[ $loop_column ] = $result;
            $temp_sum += $result;

            // clear result
            $result = 0;

        }

        for ( $loop_column = 0; $loop_column < $column;  $loop_column++ ) {

            $eigenvector[ $loop_column ] = $temp_total[ $loop_column ] / $temp_sum;
            $total_eigen = $eigenvector[ $loop_column ] + $total_eigen;

        }

        // var_dump($result);
        // var_dump($total_eigen);

        // return {array} eigenvector
        return $eigenvector;
    } 

    public function build_overall ( $eigenvector = array() ) {

        // interdepedence data
        $data_interdepedence = [ 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1 ];

        //  Initialize variabel
        $column = 10;
        $row = 10;
        $result = 0;

        //  Initialize matrix
        $overall = array();

        // Loop the rows in matrix
        for ( $loop_column = 0; $loop_column < $column;  $loop_column++ ) {
            $overall[ $loop_column ] = $eigenvector[ $loop_column ] * $data_interdepedence [ $loop_column ];
        }
        // return {array} overall
        return $overall;
    }


    /**
    * Build topsis matrix from $base_value
    *
    * @param  array $value
    * @return array $topsis_matrix
    */
    public function build_topsis_matrix ( $value = array() ) {

        // initialize base alternative data
        $data_alternative = array (

            0 => [ 0.214, 0.1024, 0.0138, 0.1539, 0.2264, 0.2264, 0.1024, 0.0214, 0.0660, 0.0660],
            1 => [ 0.0466, 0.2461, 0.0160, 0.0450, 0.2449, 0.0466, 0.0156, 0.2461, 0.0466, 0.0466],
            2 => [ 0.0916, 0.0134, 0.0317, 0.0916, 0.0916, 0.0916, 0.0446, 0.0232, 0.2604, 0.2604 ],
            3 => [ 0.0288, 0.0621, 0.0133, 0.1926, 0.1227, 0.2563, 0.0155, 0.0612, 0.1258, 0.1217 ],
            4 => [ 0.0193, 0.2469, 0.1215, 0.0193, 0.1215, 0.0646, 0.1215, 0.2469, 0.0193, 0.0193],
            5 => [ 0.0178, 0.1532, 0.0178, 0.0421, 0.1532, 0.1532, 0.0974, 0.2350, 0.0652, 0.0652  ],
            6 => [ 0.0256, 0.1971, 0.1234, 0.0142, 0.1212, 0.0189, 0.1971, 0.2057, 0.0484, 0.0484 ],
            7 => [ 0.0456, 0.0197, 0.2682, 0.0285, 0.0395, 0.0961, 0.0961, 0.0353, 0.2237, 0.1473  ],
            8 => [ 0.0502, 0.2587, 0.1890, 0.0145, 0.0722, 0.0250, 0.2587, 0.0884, 0.0183, 0.0250 ],
            9 => [ 0.0296, 0.0296, 0.0473, 0.3008, 0.0155, 0.0580, 0.0205, 0.0797, 0.0391, 0.2016, 0.2080 ]

        );

        // Initialize variabel
        $column = 10;
        $row = 10;
        $result = 0;

        // Initialize matrix
        $topsis_matrix = array();

        // Initialize base matrix
        // Loop the column in matrix
        for ( $loop_column = 0; $loop_column < $column;  $loop_column++ ) {

            // loop rows in matrix
            for ( $loop_row = 0; $loop_row < $row;  $loop_row++ ) {

                // calculate each alternative based on $data_alternative
                $result = $value[$loop_row] * $data_alternative[$loop_column][$loop_row];

                // sumarize total
                $topsis_matrix[ $loop_row ][ $loop_column ] = $result;

            }
        }

        return $topsis_matrix;
    }

    /**
    * Calculate squared from $base_value
    *
    * @param  array $value
    * @return array $topsis_square
    */
    public function build_topsis_square ( $topsis_matrix = array() ) {

        // Initialize variabel
        $column = 10;
        $row = 10;
        $result = 0;

        // Initialize matrix
        $topsis_square = array();

        // Initialize base matrix
        // Loop the column in matrix
        for ( $loop_column = 0; $loop_column < $column;  $loop_column++ ) {

            // loop rows in matrix
            for ( $loop_row = 0; $loop_row < $row;  $loop_row++ ) {

                // sumarize total
                $topsis_square[ $loop_row ][ $loop_column ] = pow($topsis_matrix[ $loop_row ][ $loop_column ], 2);

            }
        }

        return $topsis_square;

    }

    /**
    * Calculate summarize mean topsis matrix
    *
    * @param  array $topsis_matrix
    * @return array $topsis_mean
    */

    public function build_mean_topsis ( $topsis_matrix = array() ) {

        //  Initialize variabel
        $column = 10;
        $row = 10;
        $result = 0;

        //  Initialize matrix
        $topsis_mean = array();

        // Initialize base matrix
        // Loop the column in matrix
        for ( $loop_column = 0; $loop_column < $column;  $loop_column++ ) {

            // loop rows in matrix
            for ( $loop_row = 0; $loop_row < $row;  $loop_row++ ) {

                // sumarize total
                $result += $topsis_matrix[ $loop_column ][ $loop_row ];

            }

            // store calculated data and square it
            $topsis_mean[ $loop_column ] = sqrt($result);

            // clear $result
            $result = 0;
        }

        return $topsis_mean;
    }

    /**
    * Build normalized topsis data from topsis matrix and mean
    *
    * @param  array $topsis_matrix, array $topsis_mean
    * @return array $topsis_normalized
    */

    public function build_normalized_topsis ( $topsis_matrix = array(), $topsis_mean = array() ) {

        //  Initialize variabel
        $column = 10;
        $row = 10;
        $result = 0;

        //  Initialize matrix
        $topsis_normalized = array();

        // Initialize base matrix
        // Loop the column in matrix
        for ( $loop_column = 0; $loop_column < $column;  $loop_column++ ) {

            // loop rows in matrix
            for ( $loop_row = 0; $loop_row < $row;  $loop_row++ ) {

                // calculate data from topsis matrix and mean
               $result = $topsis_matrix[$loop_column][$loop_row] / $topsis_mean[$loop_column];

               $topsis_normalized[ $loop_column ][ $loop_row ] = $result;

            }
        }

        return $topsis_normalized;
    }

    /**
    * Calculated weighted normalized topsis from normalized topsis matrix and base overall weight criteria
    *
    * @param  array $topsis_matrix, array $topsis_mean
    * @return array $topsis_weighted
    */

    public function build_weighted_topsis ( $topsis_normalized = array(), $base_overall = array() ) {

        //  Initialize variabel
        $column = 10;
        $row = 10;
        $result = 0;

        //  Initialize matrix
        $topsis_weighted = array();

        // Initialize base matrix
        // Loop the column in matrix
        for ( $loop_column = 0; $loop_column < $column;  $loop_column++ ) {

            // loop rows in matrix
            for ( $loop_row = 0; $loop_row < $row;  $loop_row++ ) {

                // calculate data from topsis matrix and mean
               $result = $topsis_normalized[$loop_column][$loop_row] * $base_overall[$loop_column];

               $topsis_weighted[ $loop_column ][ $loop_row ] = $result;

            }
        }

        return $topsis_weighted;
    }

    public function build_minmax_topsis ( $topsis_weighted = array() ) {

        //  Initialize variabel
        $row = 10;
        $result = 0;

        //  Initialize matrix
        $topsis_minmax = array();

        // Initialize base matrix
        // Loop the row in matrix
        for ( $loop_row = 0; $loop_row < $row;  $loop_row++ ) {

            $result = $topsis_weighted[ $loop_row ];

            $topsis_minmax[ 'max' ][ $loop_row ] = max($result);
            $topsis_minmax[ 'min' ][ $loop_row ] = min($result);
            
        }

        return $topsis_minmax;
    }

    public function build_ideal_topsis ( $topsis_weighted = array(), $topsis_minmax = array() ) {

        //  Initialize variabel
        $column = 10;
        $row = 10;

        //  Initialize matrix
        $topsis_ideal = array();

        // temporary storage variable
        $sum_positive = 0;
        $sum_negative = 0;
        $result_positive = 0;
        $result_negative = 0;

        // Initialize base matrix
        // Loop the column in matrix
        for ( $loop_column = 0; $loop_column < $column;  $loop_column++ ) {

            // loop rows in matrix
            for ( $loop_row = 0; $loop_row < $row;  $loop_row++ ) {

                $result_positive = pow(($topsis_weighted[ $loop_row ][ $loop_column ] - $topsis_minmax[ 'max' ][ $loop_row ]), 2);
                $result_negative = pow(($topsis_weighted[ $loop_row ][ $loop_column ] - $topsis_minmax[ 'min' ][ $loop_row ]), 2);

                $topsis_ideal[ 'positive' ][ $loop_row ][ $loop_column ] = $result_positive;
                $topsis_ideal[ 'negative' ][ $loop_row ][ $loop_column ] = $result_negative;

                $sum_positive += $result_positive;
                $sum_negative += $result_negative;

            }

            $topsis_ideal[ 'positive' ][ $loop_column ][ 'total' ] = $sum_positive;
            $topsis_ideal[ 'negative' ][ $loop_column ][ 'total' ] = $sum_negative;

            $topsis_ideal[ 'positive' ][ $loop_column ][ 'root' ] = sqrt($sum_positive);
            $topsis_ideal[ 'negative' ][ $loop_column ][ 'root' ] = sqrt($sum_negative);

            // clear variable
            $sum_positive = 0;
            $sum_negative = 0;
        }

        return $topsis_ideal;
    }

    public function build_rank_topsis ( $topsis_ideal =  array() ) {

        //  Initialize variabel
        $row = 10;
        $result = 0;

        //  Initialize matrix
        $topsis_rank = array();

        // Initialize base matrix
        // Loop the row in matrix
        for ( $loop_row = 0; $loop_row < $row;  $loop_row++ ) {

            $root_max = $topsis_ideal[ 'positive' ][ $loop_row ][ 'root' ];
            $root_min = $topsis_ideal[ 'negative' ][ $loop_row ][ 'root' ];

            $topsis_rank[ 'data' ][ $loop_row ] = $root_min / ( $root_max + $root_min ); 

            echo 'root max: ' . $root_max . ' root min: ' . $root_min . ' result ' . $root_min / ( $root_max + $root_min ) . ' <br> ';
            
        }

        return $topsis_rank;
    }
}
