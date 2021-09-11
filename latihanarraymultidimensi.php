<?php 
  $hobi = [
    [    
      'artikel' => 'Detik.com',  
      'berita' => [
          ['jenis'=>'Olahraga',
            'jeniss'=>[
                ['jenisnya'=>'Sepak bola',
                  'cabang'=>[
                    ['cabangnya'=>'Sepak Bola Nasional'],
                    ['cabangnya'=>'Sepak Bola Internasional'],                    
                  ]
                ],
                ['jenisnya'=>'Bulu Tangkis',
                'cabang'=>[
                    ['cabangnya'=>'Bulu Tangkis Nasional'],
                    ['cabangnya'=>'Bulu Tangkis Internasional'],                    
                  ]
                ],
                ['jenisnya'=>'Atletik',
                'cabang'=>[
                    ['cabangnya'=>'Atletik Nasional'],
                    ['cabangnya'=>'Atletik Internasional'],                    
                  ]
                ]
            ]          
          ],
          ['jenis'=>'Ekonomi',
            'jeniss'=>[
                ['jenisnya'=>'Saham',
                  'cabang'=>[
                    ['cabangnya'=>'Permintaan'],
                    ['cabangnya'=>'Penawaran'],
                    
                  ]
                ],
                ['jenisnya'=>'Bank',
                'cabang'=>[
                    ['cabangnya'=>'Pendapatan Nasional'],
                    ['cabangnya'=>'Pertumbuhan Ekonomi'],
                    
                  ]
                ]
                ]
            ],
            ['jenis'=>'Politik',
            'jeniss'=>[
                ['jenisnya'=>'Dalam Negeri',
                  'cabang'=>[
                    ['cabangnya'=>'Surut Legislasi'],
                    ['cabangnya'=>'Banjir Kontroversi'],
                    
                  ]
                ],
                ['jenisnya'=>'Luar Negeri',
                'cabang'=>[
                    ['cabangnya'=>'Kerja Sama'],
                    ['cabangnya'=>'Kebijakan Suatu Negara'],
                    
                  ]
                ]
                ]
            ],          
          ]
        ]
      ];

    foreach ($hobi as $data1) {
      echo "Artikel : " . $data1['artikel']."<br>";
      echo "Jenis Berita :";
      foreach ($data1['berita'] as $jenis) {
        echo "<ul>";
          echo "<li>".$jenis['jenis']."</li>";
          echo "</ul>";
          foreach($jenis['jeniss'] as $jenisnya){
              echo "<ul>";
              echo "<ul>";
              echo "<li>".$jenisnya['jenisnya']."</li>";
              echo "</ul>";
              echo "</ul>";
            foreach ($jenisnya['cabang'] as $cabangnya) {
                echo "<ul>";
                echo "<ul>";
                echo "<ul>";
                echo "<li>".$cabangnya['cabangnya']."</li>";
                echo "</ul>";
                echo "</ul>";
                echo "</ul>";
            }
            
          }
        } 
    }
?>