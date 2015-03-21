msg = `service apache2 reload`
`notify-send "#{msg.to_s}" "#{Time.now}" -i "img/apache.png"`
File.open("apache_reload.log", 'a+') do |file|
   file.puts "#{msg} | #{Time.now}"
   file.puts "     -----     -----     -----     -----     -----     -----     -----     -----\n\n"
end

