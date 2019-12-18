# for markdown headings
find . -not \( -name .git -prune \) -type f -print0 | xargs -0 sed -i -z 's/ICTCRM\([^\n]*\)\n===/ICTCRM\1\n=/g'
find . -not \( -name .git -prune \) -type f -print0 | xargs -0 sed -i -z 's/ICTCRM\([^\n]*\)\n===/ICTCRM\1\n=/g'
find . -not \( -name .git -prune \) -type f -print0 | xargs -0 sed -i -z 's/ICTCRM\([^\n]*\)\n---/ICTCRM\1\n-/g'
# for comments in php files
find . -not \( -name .git -prune \) -type f -print0 | xargs -0 sed -i 's/ICTCRM\(.*\)   /ICTCRM\1       /g'
# for API examples
find . -not \( -name .git -prune \) -type f -print0 | xargs -0 sed -i 's/contact_/contact_/g'
# for everything else (first rename machine names, and then treat all remaining as title)
find . -not \( -name .git -prune \) -type f -print0 | xargs -0 sed -i 's/suite\(\W*\)crm/ict\1crm/g'
find . -not \( -name .git -prune \) -type f -print0 | xargs -0 sed -i 's/SUITE\(\W*\)CRM/ICT\1CRM/gi'


# rename all files
for file in $(find . -name "*ict*crm*")
do 
  git mv $file `echo $file | sed 's/suite\(\W*\)crm/ict\1crm/g'`
done
