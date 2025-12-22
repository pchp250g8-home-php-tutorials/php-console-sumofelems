<?php
    system("cls");
    print("Input a count of elements in array:\r\n");
    $nElems = intval(chop(fgets(STDIN)));
    $iArray = array();
    srand();
    $nSum = 0;
    for ($i = 0; $i < $nElems; $i++)
    {
        $nItem = rand(1,50);
        $iArray[] = $nItem;
    }
    print("Generated array:\r\n");
    for ($i = 0; $i < $nElems; $i++)
    {
        $nSum += $iArray[$i];
        printf("%d ", $iArray[$i]);
    }
    printf("\r\nThe Sum of %d elements of the array is:%d\r\n",$nElems, $nSum);
    fgetc(STDIN);
?>